<?php
/**
 * Trifold Theme Functions & Definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('TRIFOLD_THEME_VERSION', '1.0.0');

function trifold_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    register_nav_menus([
        'primary' => __('Primary Navigation', 'trifold'),
        'footer'  => __('Footer Navigation', 'trifold'),
    ]);
}
add_action('after_setup_theme', 'trifold_theme_setup');

function trifold_enqueue_assets() {
    $uri = get_template_directory_uri();

    // Stylesheets
    wp_enqueue_style('trifold-core', $uri . '/assets/css/trifold-core.css', [], TRIFOLD_THEME_VERSION);
    wp_enqueue_style('trifold-components', $uri . '/assets/css/trifold-components.css', ['trifold-core'], TRIFOLD_THEME_VERSION);
    wp_enqueue_style('trifold-motion', $uri . '/assets/css/trifold-motion.css', ['trifold-components'], TRIFOLD_THEME_VERSION);
    wp_enqueue_style('trifold-style', get_stylesheet_uri(), ['trifold-motion'], TRIFOLD_THEME_VERSION);

    // Scripts
    wp_enqueue_script('lenis', $uri . '/assets/js/lenis.min.js', [], '1.1.18', true);
    wp_enqueue_script('gsap', $uri . '/assets/js/gsap.min.js', [], '3.14.2', true);
    wp_enqueue_script('scroll-trigger', $uri . '/assets/js/ScrollTrigger.min.js', ['gsap'], '3.12.5', true);
    wp_enqueue_script('trifold-cursor', $uri . '/assets/js/trifold-cursor.js', [], TRIFOLD_THEME_VERSION, true);
    wp_enqueue_script('trifold-motion', $uri . '/assets/js/trifold-motion.js', ['lenis', 'gsap', 'scroll-trigger'], TRIFOLD_THEME_VERSION, true);
    wp_enqueue_script('trifold-main', $uri . '/assets/js/trifold-main.js', ['trifold-motion'], TRIFOLD_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'trifold_enqueue_assets');

// Customizer Integration
require_once get_template_directory() . '/inc/customizer.php';
