<?php
/**
 * Shortcode Includes
 *
 * Provide an interface to create shortcode that will pull
 * in content from a defined include path.
 */
if ( ! class_exists('Shortcode_Include') ) :

class Shortcode_Include {
	public $tag;
	public $defaults;

	/**
	 * Constructor
	 */
	public function __construct( $args = array() ) {
		if ( empty ( $args ) ) new WP_Error( 'shortcode-include', '$args Array is a required to instantiate ' . __class__ );

		$this->tag = $args['tag'];
		$this->include_path = $args['include_path'];

		add_shortcode( $this->tag, array( $this, 'add_shortcode' ) );
	}

	/**
	 * Shortcode Tag
	 */
	public function add_shortcode( $attrs ) {

		// Extract contents of include
		ob_start();
		include_once( $this->include_path );
		$output = ob_get_contents();
		ob_end_clean();

		// Wrap with a div for safety and return to the_content();
		$html = '<div class="shortcode shortcode--' . $this->tag . '">' . $output . '</div>';

		return $html;
	}
}

endif; // end class_exists