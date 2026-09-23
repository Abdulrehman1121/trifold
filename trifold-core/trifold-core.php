<?php
/**
 * Plugin Name: Trifold Core
 * Plugin URI: https://trifold.agency/
 * Description: Core engine for Trifold. Registers Projects, Services, and Team Custom Post Types, custom fields, Elementor widgets, REST APIs, and SEO schema markup.
 * Version: 1.0.0
 * Author: Trifold Agency (Farhan Khan, Shayan Mutahir, Abdul Rehman Kaleem)
 * Author URI: https://trifold.agency/
 * Text Domain: trifold-core
 * License: GPLv2 or later
 */

if (!defined('ABSPATH')) {
    exit;
}

define('TRIFOLD_CORE_VERSION', '1.0.0');
define('TRIFOLD_CORE_PATH', plugin_dir_path(__FILE__));
define('TRIFOLD_CORE_URL', plugin_dir_url(__FILE__));

// Load Custom Post Types
require_once TRIFOLD_CORE_PATH . 'includes/cpt/cpt-project.php';
require_once TRIFOLD_CORE_PATH . 'includes/cpt/cpt-service.php';
require_once TRIFOLD_CORE_PATH . 'includes/cpt/cpt-team.php';

// Load Meta Boxes & Admin Fields
require_once TRIFOLD_CORE_PATH . 'includes/meta/meta-project.php';
require_once TRIFOLD_CORE_PATH . 'includes/meta/meta-service.php';

// Load SEO Schema Helpers
require_once TRIFOLD_CORE_PATH . 'includes/seo/schema-generator.php';

// Load Elementor Widgets if Elementor is active
function trifold_core_init_elementor() {
    if (did_action('elementor/loaded')) {
        require_once TRIFOLD_CORE_PATH . 'includes/elementor/elementor-manager.php';
    }
}
add_action('init', 'trifold_core_init_elementor');

// Flush rewrite rules on activation
register_activation_hook(__FILE__, function() {
    trifold_register_project_cpt();
    trifold_register_service_cpt();
    trifold_register_team_cpt();
    flush_rewrite_rules();
});
