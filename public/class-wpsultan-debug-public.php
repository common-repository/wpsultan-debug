<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wp-sultan.com
 * @since      1.0.0
 *
 * @package    Wpsultan_Debug
 * @subpackage Wpsultan_Debug/public
 */
// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wpsultan_Debug
 * @subpackage Wpsultan_Debug/public
 * @author     Your Name <email@example.com>
 */
class Wpsultan_Debug_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wpsultan_debug    The ID of this plugin.
	 */
	private $wpsultan_debug;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wpsultan_debug       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wpsultan_debug, $version ) {

		$this->wpsultan_debug = $wpsultan_debug;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpsultan_Debug_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpsultan_Debug_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wpsultan_debug, plugin_dir_url( __FILE__ ) . 'css/wpsultan-debug-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpsultan_Debug_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpsultan_Debug_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wpsultan_debug, plugin_dir_url( __FILE__ ) . 'js/wpsultan-debug-public.js', array( 'jquery' ), $this->version, false );

	}

}
