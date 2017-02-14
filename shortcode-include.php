<?php
/*
Plugin Name: Shortcode Include
Plugin URI: https://github.com/Kevinlearynet/shortcode-include
Description: Provide an interface to create shortcode that will pull in content from a defined include path.
Version: 0.0.1
Author: Kevin Leary
Author URI: https://www.kevinleary.net
License: GPLv2 or later 
*/
if ( ! class_exists('SI_Init') ) :

class SI_Init 
{
	/**
	 * Initialize
	 */
	public function __construct() {
		$this->define();
	}

	/**
	 * Define Shortcodes
	 */
	static public function define() {

		// Shortcode builder class
		require_once( __DIR__ . '/shortcode-class.php' );

		// Create Shortcode Object: [hello-world]
		$hello_world = new SI_Shortcode( array(
			'tag' => 'hello-world',
			'include_path' => dirname( __FILE__ ) . '/shortcode-hello-world.php',
		) );

		// Create Shortcode Object: [sunny-day]
		$sunny_day = new SI_Shortcode( array(
			'tag' => 'sunny-day',
			'include_path' => dirname( __FILE__ ) . '/shortcode-sunny-day.php',
		) );
	}
}

new SI_Init();

endif;