<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       Paul Edmund Janubas
 * @since      1.0.0
 *
 * @package    Umbrella_Google_Calendar
 * @subpackage Umbrella_Google_Calendar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Umbrella_Google_Calendar
 * @subpackage Umbrella_Google_Calendar/admin
 * @author     Paul Edmund Janubas <pauledmundjanubas@gmail.com>
 */
class Umbrella_Google_Calendar_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->register_admin_menu();
	
		// add_action( 'admin_menu', [$this, 'my_admin_menu'] );
		// add_action( 'admin_menu', [$this, 'my_admin_menub'] );
	}

	public function register_admin_menu()
	{


		$fields['name'] = [
			''
		];

		$menu1 = new UmbrellaAdminOptionsPage([
			'menu_id' 		=> 'umbrella-google-calendar',
			'page_title' 	=> 'My Top Level Menu Example',
			'menu_title'	=> 'Top Level Menu',
			// 'fields' 		=> $fields,
		]);

		$menu1->register();


		// $menu1 = new UmbrellaAdminOptionsPage([
		// 	'menu_id' 		=> 'test2',
		// 	'page_title' 	=> 'My Top Level Menu Example2',
		// 	'menu_title'	=> 'Top Level Menu2',
		// 	// 'fields' 		=> $fields,
		// ]);

		// $menu1->register();

	}

	function my_admin_menu() {
		add_menu_page( 'My Top Level Menu Example', 'Top Level Menu', 'manage_options', 'myplugin/myplugin-admin-page.php', [$this, 'myplguin_admin_page'], 'dashicons-tickets', 6  );
	}

	function my_admin_menub() {
		add_menu_page( 'My Top Level Menu Example2', 'Top Level Menu2', 'manage_options', 'bcd.php', [$this, 'myplguin_admin_page'], 'dashicons-tickets', 6  );
	}

	function myplguin_admin_page(){
		?>
		<div class="wrap">
			<h2>Welcome To My Plugin</h2>
		</div>
		<?php
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/umbrella-google-calendar-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/umbrella-google-calendar-admin.js', array( 'jquery' ), $this->version, false );
	}

}
