<?php
/**
 * Theme setup and asset loading.
 *
 * @package Aswathy_Demo_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function aswathy_demo_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'aswathy_demo_theme_setup' );

function aswathy_demo_theme_enqueue_styles() {
    wp_enqueue_style(
        'aswathy-demo-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'aswathy_demo_theme_enqueue_styles' );
