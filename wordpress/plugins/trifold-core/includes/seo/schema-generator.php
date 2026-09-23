<?php
/**
 * Trifold SEO Schema Markup Generator (JSON-LD)
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_output_json_ld_schema() {
    // Prevent duplicate schema if an dedicated SEO plugin is handling JSON-LD
    if (defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || defined('SEOPRESS_VERSION') || defined('AIOSEO_VERSION')) {
        return;
    }

    $schema = [];

    // Global Organization Schema
    $schema[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Trifold',
        'url' => 'https://trifold.agency',
        'logo' => get_template_directory_uri() . '/assets/images/Trifold_Primary_Ivory.png',
        'description' => 'Creative digital agency connecting brand identity, website design and development, and graphic design.',
        'slogan' => 'Good things unfold.',
        'founder' => [
            ['@type' => 'Person', 'name' => 'Farhan Khan'],
            ['@type' => 'Person', 'name' => 'Shayan Mutahir'],
            ['@type' => 'Person', 'name' => 'Abdul Rehman Kaleem']
        ],
        'sameAs' => [
            'https://linkedin.com/company/trifoldagency',
            'https://instagram.com/trifoldagency'
        ]
    ];

    // Single Project Schema
    if (is_singular('project')) {
        global $post;
        $client = get_post_meta($post->ID, '_trifold_client', true);
        $industry = get_post_meta($post->ID, '_trifold_industry', true);
        $contribution = get_post_meta($post->ID, '_trifold_contribution', true);
        $year = get_post_meta($post->ID, '_trifold_year', true);

        $schema[] = [
            '@context' => 'https://schema.org',
            '@type' => 'CreativeWork',
            'name' => get_the_title($post),
            'headline' => get_the_title($post) . ' — Case Study',
            'creator' => [
                '@type' => 'Organization',
                'name' => 'Trifold'
            ],
            'dateCreated' => $year ?: '2026',
            'genre' => $industry,
            'description' => get_the_excerpt($post),
            'disambiguatingDescription' => 'Contribution: ' . ($contribution ?: 'To be confirmed')
        ];
    }

    // Output JSON-LD in head
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'trifold_output_json_ld_schema');
