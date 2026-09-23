<?php
/**
 * Trifold Philosophy Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;

class Trifold_Philosophy_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_philosophy';
    }

    public function get_title() {
        return esc_html__('Trifold Philosophy Typography', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-t-letter';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function render() {
        ?>
        <section class="philosophy-section" id="philosophy">
          <div class="container philosophy-manifesto-box">
            <span class="kicker"><?php esc_html_e('Studio Philosophy', 'trifold-core'); ?></span>
            <div style="margin-top: 32px;">
              <h2 class="manifesto-line-large"><?php esc_html_e('A LOGO IS NOT A BRAND.', 'trifold-core'); ?></h2>
              <h2 class="manifesto-line-large"><?php esc_html_e('A WEBSITE IS NOT JUST A COLLECTION OF PAGES.', 'trifold-core'); ?></h2>
              <h2 class="manifesto-line-large text-vermilion"><?php esc_html_e('EVERYTHING SHOULD FEEL CONNECTED.', 'trifold-core'); ?></h2>
            </div>
            <div class="manifesto-conclusion">
              <div class="manifesto-pillar-card">
                <h4 class="manifesto-pillar-title"><?php esc_html_e('ONE IDEA.', 'trifold-core'); ?></h4>
                <p class="manifesto-pillar-text"><?php esc_html_e('Clear strategic intent behind every decision.', 'trifold-core'); ?></p>
              </div>
              <div class="manifesto-pillar-card">
                <h4 class="manifesto-pillar-title"><?php esc_html_e('ONE IDENTITY.', 'trifold-core'); ?></h4>
                <p class="manifesto-pillar-text"><?php esc_html_e('Unmistakable visual grammar and typography.', 'trifold-core'); ?></p>
              </div>
              <div class="manifesto-pillar-card">
                <h4 class="manifesto-pillar-title"><?php esc_html_e('ONE EXPERIENCE.', 'trifold-core'); ?></h4>
                <p class="manifesto-pillar-text"><?php esc_html_e('Frictionless digital navigation and interaction.', 'trifold-core'); ?></p>
              </div>
              <div class="manifesto-pillar-card">
                <h4 class="manifesto-pillar-title"><?php esc_html_e('EVERYWHERE.', 'trifold-core'); ?></h4>
                <p class="manifesto-pillar-text"><?php esc_html_e('Consistent touchpoints wherever you show up.', 'trifold-core'); ?></p>
              </div>
            </div>
          </div>
        </section>
        <?php
    }
}
