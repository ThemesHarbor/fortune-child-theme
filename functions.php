<?php
/**
 * Functions and definitions of Fortune child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Fortune
 * @since 1.0.0
 */

 /**
  *  Sets up child theme defaults and registers support for various WordPress features.
  *
  * @link http://codex.wordpress.org/Child_Themes
  */
 function fortune_child_theme_setup() {
     load_child_theme_textdomain( 'fortune', get_stylesheet_directory() . '/languages' );
 }
 add_action( 'after_setup_theme', 'fortune_child_theme_setup' );

/**
 * Enqueue parent style.
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function fortune_child_enqueue_parent_styles() {
    wp_enqueue_style( 'fortune-parent-style', get_template_directory_uri() . '/style.css', array( 'fortune-css-framework', 'font-awesome' ) );
}
add_action( 'wp_enqueue_scripts', 'fortune_child_enqueue_parent_styles' );
