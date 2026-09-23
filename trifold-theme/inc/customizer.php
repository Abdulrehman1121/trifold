<?php
/**
 * Trifold Theme Customizer Options
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_customize_register($wp_customize) {
    // Studio Contact Section
    $wp_customize->add_section('trifold_contact_section', [
        'title'    => __('Trifold Studio Contact', 'trifold'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('trifold_email', [
        'default'           => 'hello@trifold.agency',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('trifold_email', [
        'label'   => __('Studio Email', 'trifold'),
        'section' => 'trifold_contact_section',
        'type'    => 'email',
    ]);

    $wp_customize->add_setting('trifold_phone', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('trifold_phone', [
        'label'   => __('Studio Phone', 'trifold'),
        'section' => 'trifold_contact_section',
        'type'    => 'text',
    ]);

    // Social Channels
    $wp_customize->add_section('trifold_social_section', [
        'title'    => __('Social Profiles', 'trifold'),
        'priority' => 35,
    ]);

    $wp_customize->add_setting('trifold_linkedin', [
        'default'           => 'https://linkedin.com/company/trifoldagency',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('trifold_linkedin', [
        'label'   => __('LinkedIn URL', 'trifold'),
        'section' => 'trifold_social_section',
        'type'    => 'url',
    ]);

    $wp_customize->add_setting('trifold_instagram', [
        'default'           => 'https://instagram.com/trifoldagency',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('trifold_instagram', [
        'label'   => __('Instagram URL', 'trifold'),
        'section' => 'trifold_social_section',
        'type'    => 'url',
    ]);
}
add_action('customize_register', 'trifold_customize_register');
