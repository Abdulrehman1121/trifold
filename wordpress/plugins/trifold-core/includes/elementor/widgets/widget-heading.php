<?php
/**
 * Trifold Animated Heading Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Trifold_Heading_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_heading';
    }

    public function get_title() {
        return esc_html__('Trifold Editorial Heading', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-heading';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => esc_html__('Heading Text', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('kicker_text', [
            'label'   => esc_html__('Kicker Subhead', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Selected Discipline',
        ]);

        $this->add_control('title_text', [
            'label'   => esc_html__('Title Text', 'trifold-core'),
            'type'    => Controls_Manager::TEXTAREA,
            'default' => 'GOOD THINGS UNFOLD.',
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="trifold-editorial-heading">
          <?php if (!empty($settings['kicker_text'])) : ?>
            <span class="kicker"><?php echo esc_html($settings['kicker_text']); ?></span>
          <?php endif; ?>
          <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php echo esc_html($settings['title_text']); ?></h2>
        </div>
        <?php
    }
}
