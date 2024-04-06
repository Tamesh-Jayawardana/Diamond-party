<?php 
/**
 * Plugin Name: Rozer Core
 * Plugin URI: http://roadthemes.com/
 * Description: The helper plugin for Rozer themes.
 * Version: 1.0.0
 * Author: RoadThemes
 * Author URI: http://roadthemes.com/
 * Text Domain: roadthemes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class Rozer Core.
 * Main class.
 */
final class Rozer_Core {

	/**
	 * Constructor function.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
		$this->define_constants();
		$this->includes();
		$this->init();
		
	}

	/**
	 * Defines constants
	 */
	public function define_constants() {
		define( 'ROZER_CORE_DIR', plugin_dir_path( __FILE__ ) );
		define( 'ROZER_CORE_URL', plugin_dir_url( __FILE__ ) );
		define( 'ROZER_CORE_VERSION', '1.0.0' );
	}

	/**
	 * Load files
	 */
	public function includes() {
		include_once  ROZER_CORE_DIR . 'includes/elementor/road-elementor.php';
		include_once  ROZER_CORE_DIR . 'includes/widgets/widget-layered-nav.php';
		include_once  ROZER_CORE_DIR . 'includes/widgets/widget-blocks.php';
		include_once  ROZER_CORE_DIR . 'includes/widgets/widget-social.php';
		include_once  ROZER_CORE_DIR . 'includes/custom-post-types/post-type-custom-blocks.php';
		include_once  ROZER_CORE_DIR . 'includes/shortcodes/posts-slider.php';
		include_once  ROZER_CORE_DIR . 'includes/shortcodes/product-categories.php';
		include_once  ROZER_CORE_DIR . 'includes/shortcodes/products.php';
		if(!( class_exists( 'PR_CMB2_Image_Select_Field' ) ) ) {
		    require_once( ROZER_CORE_DIR . 'includes/cmb2/cmb2-image-select-field-type.php' );
		}
	}

	public function init() { 
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}
	}

	public function i18n() {

		load_plugin_textdomain( 'roadthemes' );

	}

	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'roadtheme' ),
			'<strong>' . esc_html__( 'Road Elementor', 'roadtheme' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'roadtheme' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	} 
	
}
new Rozer_Core();
