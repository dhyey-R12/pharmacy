<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pharmacy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')%rW_?y5 qkXVUTi?kyJB$-&OvZOMgr))4Ygd%.#@=?IlJJ^<q>y`fNlJ<l14@Mp' );
define( 'SECURE_AUTH_KEY',  'aaMy r^F*Ys&H6`huq&|.V^B|{*~KOgYX2>sA^++J6w:`@*LHUXP+%Xtc>4z3*F/' );
define( 'LOGGED_IN_KEY',    'aDHG9v14WEHgi_F}`Nb&plHaqC.[U,sE8C?{lr>v`R)h_:^6{!2!YpfnEOL^EWx|' );
define( 'NONCE_KEY',        ';H5EpH^wb{-Kn@LXSnzfj ]$avjFz?B0Y5vpi+ZU^^#[?|EK:.d?_<Q|fQ)Ib$}w' );
define( 'AUTH_SALT',        'la,=>~c=__HpNYfgb-(m?!kM%jLLP^Jq!~ %Q<D;_Pu.9*GO3@1EgLjhk8bZDw0+' );
define( 'SECURE_AUTH_SALT', '/-[^(,70X<RE~O-8.{M9L`ZzdTN E7) 5&ecrI +2S/YF]0f UTOj}/5pVP0+SG-' );
define( 'LOGGED_IN_SALT',   'Gw4ax%SaD{bxXm=M@`B1m6]g^i3`yh:9o@=qJ#r-(s|v9uSD<7$;*yO/F]:$nX)i' );
define( 'NONCE_SALT',       '%A=S^,pzQH.w8hSn:a%aN4?ol>agal!U7LozkA,eHj gaoY_#,5z3+,m3)Q~J47U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
