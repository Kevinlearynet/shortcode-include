<?php
/**
 * Theme or Plugin Implementation Example
 */

// Generator class
require_once( __DIR__ . '/shortcode-include.php' );

// Create Shortcode Object: [hello-world]
$hello_world = new Shortcode_Include( array(
	'tag' => 'hello-world',
	'include_path' => dirname( __FILE__ ) . '/shortcode-hello-world.php',
) );

// Create Shortcode Object: [sunny-day]
$sunny_day = new Shortcode_Include( array(
	'tag' => 'sunny-day',
	'include_path' => dirname( __FILE__ ) . '/shortcode-sunny-day.php',
) );