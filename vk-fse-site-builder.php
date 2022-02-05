<?php
/**
 * Plugin Name:     VK FSE Site Builder
 * Plugin URI:      https://github.com/vektor-inc/vk-fse-site-builder
 * Description:
 * Author:          Vektor,Inc.
 * Author URI:      https://vektor-inc.co.jp
 * Text Domain:     vk-fse-site-builder
 * Domain Path:     /languages
 * Version:         0.0.0
 *
 * @package         vektor-inc/vk-fse-site-builder
 */

 // Get Plugin version.
$version = get_file_data( __FILE__, array( 'version' => 'Version' ) );
define( 'VKSB_VERSION', $version['version'] );
define( 'VKSB_DIRECTORY_PATH', dirname( __FILE__ ) );
define( 'VKSB_DIRECTORY_URL', plugins_url( '', __FILE__ ) );

// Your code starts here.
require dirname( __FILE__ ) . '/patterns-data/class-register-patterns-from-json.php';

function vksb_support() {

	// Enqueue editor styles.
	// add_editor_style( 'assets/css/style.css' );
	// add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'vksb_support' );

/**
 * Enqueue scripts and styles.
 */
function vksb_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'vksb-style', VKSB_DIRECTORY_URL . '/assets/css/style.css', array(), VKSB_VERSION );
}
add_action( 'wp_enqueue_scripts', 'vksb_scripts' );
