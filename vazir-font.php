<?php
/**
 * @package vazir-font
 * @version 1.0
 */
/*
Plugin Name: Vazir Font
Plugin URI: https://rastikerdar.github.io/vazirmatn/
Description: فونت وزیر برای قالب و داشبورد وردپرس | Add Vazirmatn font to wordpress
Author: SadeghPM
Version: 1.0
Author URI: https://github.com/sadeghpm
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_enqueue_scripts', 'vazir_font_add_css' );
add_action( 'wp_enqueue_scripts', 'vazir_font_add_css' );
add_action( 'login_enqueue_scripts', 'vazir_font_add_css' );

function vazir_font_add_css() {
	$css_file = ( is_admin() ? 'vazir-font-dashboard.css' : 'vazir-font.css' );
	wp_enqueue_style( 'vazir-font-css-style', plugin_dir_url( __FILE__ ) . "asset/css/" . $css_file );
}

