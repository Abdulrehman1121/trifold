<?php
/**
 * Trifold Project Gallery Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Trifold_Gallery_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_gallery';
    }

    public function get_title() {
        return esc_html__('Trifold Project Gallery', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-image-rollover';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => esc_html__('Gallery Settings', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('columns', [
            'label'   => esc_html__('Columns', 'trifold-core'),
            'type'    => Controls_Manager::SELECT,
            'default' => '2',
            'options' => [
                '1' => '1 Column',
                '2' => '2 Columns',
                '3' => '3 Columns',
            ],
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $cols = $settings['columns'];
        ?>
        <div class="trifold-elementor-gallery" style="display: grid; grid-template-columns: repeat(<?php echo esc_attr($cols); ?>, 1fr); gap: 32px;">
          <!-- Dynamically populated via custom gallery -->
          <div class="gallery-item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/sumus-desktop.svg'); ?>" alt="" style="width:100%; border-radius:6px; box-shadow:0 16px 40px rgba(0,0,0,0.06);">
          </div>
          <div class="gallery-item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/staratlas-desktop.svg'); ?>" alt="" style="width:100%; border-radius:6px; box-shadow:0 16px 40px rgba(0,0,0,0.06);">
          </div>
        </div>
        <?php
    }
}
