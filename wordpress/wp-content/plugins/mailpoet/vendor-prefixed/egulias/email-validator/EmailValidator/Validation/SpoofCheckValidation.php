<?php

namespace MailPoetVendor\Egulias\EmailValidator\Validation;

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Egulias\EmailValidator\EmailLexer;
use MailPoetVendor\Egulias\EmailValidator\Exception\InvalidEmail;
use MailPoetVendor\Egulias\EmailValidator\Validation\Error\SpoofEmail;
use Spoofchecker;
class SpoofCheckValidation implements \MailPoetVendor\Egulias\EmailValidator\Validation\EmailValidation
{
    /**
     * @var InvalidEmail|null
     */
    private $error;
    public function __construct()
    {
        if (!\extension_loaded('intl')) {
            throw new \LogicException(\sprintf('The %s class requires the Intl extension.', __CLASS__));
        }
    }
    /**
     * @psalm-suppress InvalidArgument
     */
    public function isValid($email, \MailPoetVendor\Egulias\EmailValidator\EmailLexer $emailLexer)
    {
        $checker = new \Spoofchecker();
        $checker->setChecks(\Spoofchecker::SINGLE_SCRIPT);
        if ($checker->isSuspicious($email)) {
            $this->error = new \MailPoetVendor\Egulias\EmailValidator\Validation\Error\SpoofEmail();
        }
        return $this->error === null;
    }
    /**
     * @return InvalidEmail|null
     */
    public function getError()
    {
        return $this->error;
    }
    public function getWarnings()
    {
        return [];
    }
}
