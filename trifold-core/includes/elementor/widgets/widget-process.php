<?php
/**
 * Trifold Process Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;

class Trifold_Process_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_process';
    }

    public function get_title() {
        return esc_html__('Trifold Process Sequence', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-number-field';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function render() {
        ?>
        <section class="process-section" id="process">
          <div class="container">
            <span class="kicker"><?php esc_html_e('How We Work', 'trifold-core'); ?></span>
            <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('FROM THE FIRST IDEA TO THE FINAL DETAIL.', 'trifold-core'); ?></h2>
            <div class="process-grid">
              <div class="process-card">
                <span class="process-num">01</span>
                <h3 class="process-title"><?php esc_html_e('Discover', 'trifold-core'); ?></h3>
                <p class="process-desc"><?php esc_html_e('We learn about your business, audience, and commercial priorities.', 'trifold-core'); ?></p>
              </div>
              <div class="process-card">
                <span class="process-num">02</span>
                <h3 class="process-title"><?php esc_html_e('Define', 'trifold-core'); ?></h3>
                <p class="process-desc"><?php esc_html_e('We agree on direction, scope, content hierarchy and foundations.', 'trifold-core'); ?></p>
              </div>
              <div class="process-card">
                <span class="process-num">03</span>
                <h3 class="process-title"><?php esc_html_e('Design', 'trifold-core'); ?></h3>
                <p class="process-desc"><?php esc_html_e('We craft high-fidelity prototypes and visual systems with review stages.', 'trifold-core'); ?></p>
              </div>
              <div class="process-card">
                <span class="process-num">04</span>
                <h3 class="process-title"><?php esc_html_e('Build', 'trifold-core'); ?></h3>
                <p class="process-desc"><?php esc_html_e('We engineer performant WordPress themes and custom controls.', 'trifold-core'); ?></p>
              </div>
              <div class="process-card">
                <span class="process-num">05</span>
                <h3 class="process-title"><?php esc_html_e('Refine', 'trifold-core'); ?></h3>
                <p class="process-desc"><?php esc_html_e('Testing across devices, accessibility audits, and Core Web Vitals checks.', 'trifold-core'); ?></p>
              </div>
              <div class="process-card">
                <span class="process-num">06</span>
                <h3 class="process-title"><?php esc_html_e('Launch', 'trifold-core'); ?></h3>
                <p class="process-desc"><?php esc_html_e('Deployment, complete dashboard training, and ongoing support handoff.', 'trifold-core'); ?></p>
              </div>
            </div>
          </div>
        </section>
        <?php
    }
}
