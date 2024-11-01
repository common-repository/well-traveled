<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.welltraveled.io
 * @since      1.0.0
 *
 * @package    Well_Traveled
 * @subpackage Well_Traveled/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Well_Traveled
 * @subpackage Well_Traveled/public
 * @author     Isaac Martin <isaac@welltraveled.io>
 */
class Well_Traveled_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->well_traveled_options = get_option($this->plugin_name);

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
		 * defined in Well_Traveled_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Well_Traveled_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */


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
		 * The Well_Traveled_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 $app_link = 'https://cdn.welltraveled.io/app.js';

		 //

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/well-traveled-public.js', array(), $this->version, false );

		wp_register_script('wt_app', $app_link, array(), $this->version, false);
		wp_enqueue_script( 'wt_app');

		echo '<wt_id style="display:none; visibility:hidden;">'.$this->well_traveled_options['unique_id'].'</wt_id>';


	}

}
