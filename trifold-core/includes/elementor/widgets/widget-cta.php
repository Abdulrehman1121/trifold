<?php
/**
 * Trifold CTA Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Trifold_CTA_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_cta';
    }

    public function get_title() {
        return esc_html__('Trifold Unfolding CTA', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-call-to-action';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => esc_html__('Content', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('title_line1', [
            'label'   => esc_html__('Line 1', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'HAVE SOMETHING IN MIND?',
        ]);

        $this->add_control('title_line2', [
            'label'   => esc_html__('Line 2', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => "LET'S UNFOLD IT.",
        ]);

        $this->add_control('btn_text', [
            'label'   => esc_html__('Button Text', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Start a project with us',
        ]);

        $this->add_control('btn_url', [
            'label'   => esc_html__('Button URL', 'trifold-core'),
            'type'    => Controls_Manager::URL,
            'default' => ['url' => '/contact/'],
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="cta-section" id="contact-cta">
          <div class="container">
            <span class="kicker"><?php esc_html_e('Ready to begin?', 'trifold-core'); ?></span>
            <h2 class="cta-crescendo-title">
              <?php echo esc_html($settings['title_line1']); ?><br>
              <span class="unfold-highlight"><?php echo esc_html($settings['title_line2']); ?></span>
            </h2>
            <p class="cta-subline">
              <?php esc_html_e('Whether you need a complete brand identity, a considered website, or ongoing design support, we help every touchpoint feel part of the same business.', 'trifold-core'); ?>
            </p>
            <a href="<?php echo esc_url($settings['btn_url']['url']); ?>" class="btn btn-vermilion" style="font-size: 1.1rem; padding: 20px 44px;">
              <?php echo esc_html($settings['btn_text']); ?>
              <svg class="btn-icon-arrow" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </section>
        <?php
    }
}
