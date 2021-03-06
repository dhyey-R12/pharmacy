<?php if ( ! defined( 'ABSPATH' ) ) exit;

class Haet_Multilanguage {
	private $multilang_plugin;

	function __construct(){
		if( apply_filters( 'wpml_current_language', NULL ) )
			$this->multilang_plugin = 'WPML';
		else
			$this->multilang_plugin = false;
	}
	
	public function is_multilanguage_site(){
		return $this->multilang_plugin !== false;
	}	

	public function get_current_language(){
		if( $this->multilang_plugin == 'WPML' ){
			$current_language = apply_filters( 'wpml_current_language', NULL );
			if( $current_language != 'all' )
				return $current_language;
		}

		return '';
	}


	public function maybe_print_language_label( $theme_options, $key ){
		if( !$this->is_multilanguage_site() || !$this->is_translation_enabled_for_field( $theme_options, $key ) )
			echo '';
		else
			echo strtoupper( $this->get_current_language() );
	}


	public function get_translateable_theme_option( $theme_options, $key ){
		if( !$this->is_multilanguage_site() || !$this->is_translation_enabled_for_field( $theme_options, $key ) )
			return $theme_options[$key];
		
		$translateable_key = $this->get_translateable_theme_options_key( $theme_options, $key );
		if( array_key_exists( $translateable_key, $theme_options ) )
			return $theme_options[$translateable_key];

		return $theme_options[$key];
	}


	// we add another field ..._enable_translation to every translatable field e.g. footer_enable_translation
	public function is_translation_enabled_for_field( $theme_options, $key ){
		return ( array_key_exists( $key . '_enable_translation', $theme_options ) && $theme_options[$key . '_enable_translation'] == 1 );
	}



	public function get_translateable_theme_options_key( $theme_options, $key ){
		if( !$this->is_multilanguage_site() || !$this->is_translation_enabled_for_field( $theme_options, $key ) )
			return $key;
		$current_language = $this->get_current_language();
		if( $current_language && $current_language != '' )
			return $key . '_' . $current_language;
		
		return $key;
	}
}

?>