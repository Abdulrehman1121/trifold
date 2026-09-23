<?php
/**
 * Trifold Elementor Integration Manager
 */

if (!defined('ABSPATH')) {
    exit;
}

class Trifold_Elementor_Manager {
    private static $_instance = null;

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        add_action('elementor/elements/categories_registered', [$this, 'register_categories']);
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
    }

    public function register_categories($elements_manager) {
        $elements_manager->add_category(
            'trifold-category',
            [
                'title' => esc_html__('Trifold Agency Elements', 'trifold-core'),
                'icon'  => 'fa fa-cube',
            ]
        );
    }

    public function register_widgets($widgets_manager) {
        $widget_files = [
            'widget-hero.php'         => 'Trifold_Hero_Widget',
            'widget-story.php'        => 'Trifold_Story_Widget',
            'widget-carousel.php'     => 'Trifold_Carousel_Widget',
            'widget-services.php'     => 'Trifold_Services_Widget',
            'widget-philosophy.php'   => 'Trifold_Philosophy_Widget',
            'widget-process.php'      => 'Trifold_Process_Widget',
            'widget-graphic-wall.php' => 'Trifold_Graphic_Wall_Widget',
            'widget-cta.php'          => 'Trifold_CTA_Widget',
            'widget-gallery.php'      => 'Trifold_Gallery_Widget',
            'widget-heading.php'      => 'Trifold_Heading_Widget',
        ];

        foreach ($widget_files as $file => $class) {
            $path = TRIFOLD_CORE_PATH . 'includes/elementor/widgets/' . $file;
            if (file_exists($path)) {
                require_once $path;
                if (class_exists($class)) {
                    $widgets_manager->register(new $class());
                }
            }
        }
    }
}

Trifold_Elementor_Manager::instance();
