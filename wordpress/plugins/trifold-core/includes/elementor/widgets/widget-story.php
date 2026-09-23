<?php
/**
 * Trifold Unfolding Story Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Trifold_Story_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_story';
    }

    public function get_title() {
        return esc_html__('Trifold Unfolding Story', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-scroll';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => esc_html__('Story Content', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('step1_title', [
            'label'   => esc_html__('Step 1 Title', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'EVERY BUSINESS STARTS WITH AN IDEA.',
        ]);

        $this->add_control('step2_title', [
            'label'   => esc_html__('Step 2 Title', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'WE GIVE IT AN IDENTITY.',
        ]);

        $this->add_control('step3_title', [
            'label'   => esc_html__('Step 3 Title', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'THEN WE TURN THAT IDENTITY INTO AN EXPERIENCE.',
        ]);

        $this->add_control('step4_title', [
            'label'   => esc_html__('Step 4 Title', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'AND KEEP IT CONNECTED EVERYWHERE.',
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="story-scroll-section" id="story">
          <div class="container">
            <div class="story-pin-container">
              <div class="story-narrative-col">
                <div class="story-step-card active" data-step="1">
                  <span class="story-step-num">01 / GENESIS</span>
                  <h2 class="story-step-title"><?php echo esc_html($settings['step1_title']); ?></h2>
                  <p class="story-step-desc">A vision for how things could work better. But an idea without form remains invisible to customers.</p>
                </div>
                <div class="story-step-card" data-step="2">
                  <span class="story-step-num">02 / FOUNDATION</span>
                  <h2 class="story-step-title"><?php echo esc_html($settings['step2_title']); ?></h2>
                  <p class="story-step-desc">Strategic positioning, a distinct symbol, considered typography and a visual system that makes your business recognized.</p>
                </div>
                <div class="story-step-card" data-step="3">
                  <span class="story-step-num">03 / REALIZATION</span>
                  <h2 class="story-step-title"><?php echo esc_html($settings['step3_title']); ?></h2>
                  <p class="story-step-desc">We architect and build websites that carry your brand's confidence into every digital interaction and device.</p>
                </div>
                <div class="story-step-card" data-step="4">
                  <span class="story-step-num">04 / CONTINUITY</span>
                  <h2 class="story-step-title"><?php echo esc_html($settings['step4_title']); ?></h2>
                  <p class="story-step-desc">Social assets, collateral, pitch presentations, and campaigns—all moving together as parts of one system.</p>
                </div>
              </div>

              <div class="story-visual-col">
                <div class="story-morph-canvas">
                  <svg class="story-svg-box" viewBox="0 0 294 272" aria-hidden="true">
                    <g transform="translate(40 40)">
                      <polygon class="plane p0" points="0,33 50,0 214,0 90,57" fill="#E4492E"/>
                      <polygon class="plane p1" points="113,67 214,3 214,58 149,84" fill="#E4492E" opacity="0.9"/>
                      <polygon class="plane p2" points="91,64 149,95 149,192 91,158" fill="#E4492E" opacity="0.8"/>
                    </g>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
    }
}
