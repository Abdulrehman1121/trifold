<?php
/**
 * Trifold Hero Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

class Trifold_Hero_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_hero';
    }

    public function get_title() {
        return esc_html__('Trifold Hero', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-banner';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => esc_html__('Hero Content', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('eyebrow', [
            'label'   => esc_html__('Eyebrow', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Creative Digital Agency',
        ]);

        $this->add_control('headline_p1', [
            'label'   => esc_html__('Headline First Part', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Good things',
        ]);

        $this->add_control('headline_highlight', [
            'label'   => esc_html__('Headline Unfold Word', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'unfold.',
        ]);

        $this->add_control('descriptor', [
            'label'   => esc_html__('Service Descriptor', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Branding. Websites. Design.',
        ]);

        $this->add_control('primary_btn_text', [
            'label'   => esc_html__('Primary Button Text', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Explore our work',
        ]);

        $this->add_control('primary_btn_url', [
            'label'   => esc_html__('Primary Button URL', 'trifold-core'),
            'type'    => Controls_Manager::URL,
            'default' => ['url' => '#portfolio'],
        ]);

        $this->add_control('secondary_btn_text', [
            'label'   => esc_html__('Secondary Button Text', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'Start a project',
        ]);

        $this->add_control('secondary_btn_url', [
            'label'   => esc_html__('Secondary Button URL', 'trifold-core'),
            'type'    => Controls_Manager::URL,
            'default' => ['url' => '/contact/'],
        ]);

        $this->end_controls_section();

        // Style Tab
        $this->start_controls_section('style_section', [
            'label' => esc_html__('Style & Animation', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_control('enable_unfold_anim', [
            'label'        => esc_html__('Enable GSAP Unfold Animation', 'trifold-core'),
            'type'         => Controls_Manager::SWITCHER,
            'default'      => 'yes',
            'return_value' => 'yes',
        ]);

        $this->add_control('canvas_bg_color', [
            'label'   => esc_html__('Canvas Background Color', 'trifold-core'),
            'type'    => Controls_Manager::COLOR,
            'default' => '#F5F2EB',
            'selectors' => [
                '{{WRAPPER}} .hero-section' => 'background-color: {{VALUE}};',
            ],
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="hero-section" id="hero">
          <div class="hero-backdrop-geometry"></div>
          <div class="hero-backdrop-geometry two"></div>

          <div class="container hero-content">
            <div class="hero-logo-stage">
              <svg class="hero-logo-svg" viewBox="0 0 1080 280" aria-label="Trifold Logo">
                <g class="symbol" transform="translate(40 40)">
                  <polygon class="plane p0" points="0,33 50,0 214,0 90,57" fill="#E4492E"/>
                  <polygon class="plane p1" points="113,67 214,3 214,58 149,84" fill="#E4492E"/>
                  <polygon class="plane p2" points="91,64 149,95 149,192 91,158" fill="#E4492E"/>
                </g>
                <g class="word">
                  <g class="letter l0"><path d="M788 0Q676 -21 568.5 -18.5Q461 -16 376.5 19.5Q292 55 248 134Q208 208 206.0 284.5Q204 361 204 458V1380H476V474Q476 411 477.5 360.5Q479 310 498 280Q534 223 613.0 218.0Q692 213 788 226ZM20 870V1080H788V870Z" transform="translate(299.600 230) scale(0.12 -0.12)" fill="#191919"/></g>
                  <g class="letter l1"><path d="M140 0V1080H380V816L354 850Q375 906 410.0 952.0Q445 998 496 1028Q535 1052 581.0 1065.5Q627 1079 676.0 1082.5Q725 1086 774 1080V826Q729 840 669.5 835.5Q610 831 562 808Q514 786 481.0 749.5Q448 713 431.0 663.5Q414 614 414 552V0Z" transform="translate(406.160 230) scale(0.12 -0.12)" fill="#191919"/></g>
                  <g class="letter l2"><path d="M160 1230V1470H432V1230ZM160 0V1080H432V0Z" transform="translate(505.040 230) scale(0.12 -0.12)" fill="#191919"/></g>
                  <g class="letter l3"><path d="M230 0V1076Q230 1117 232.0 1169.0Q234 1221 248.5 1274.0Q263 1327 302 1370Q352 1426 410.5 1446.5Q469 1467 524.0 1468.5Q579 1470 618 1470H752V1250H628Q564 1250 533.0 1217.5Q502 1185 502 1140V0ZM60 870V1080H752V870Z" transform="translate(576.080 230) scale(0.12 -0.12)" fill="#191919"/></g>
                  <g class="letter l4"><path d="M626 -30Q463 -30 340.0 43.0Q217 116 148.5 244.5Q80 373 80 540Q80 709 150.0 837.5Q220 966 343.0 1038.0Q466 1110 626 1110Q789 1110 912.5 1037.0Q1036 964 1105.0 835.5Q1174 707 1174 540Q1174 372 1104.5 243.5Q1035 115 911.5 42.5Q788 -30 626 -30ZM626 224Q757 224 821.5 312.5Q886 401 886 540Q886 684 820.5 770.0Q755 856 626 856Q537 856 480.0 816.0Q423 776 395.5 705.0Q368 634 368 540Q368 395 433.5 309.5Q499 224 626 224Z" transform="translate(668.720 230) scale(0.12 -0.12)" fill="#191919"/></g>
                  <g class="letter l5"><path d="M160 0V1470H432V0Z" transform="translate(819.200 230) scale(0.12 -0.12)" fill="#191919"/></g>
                  <g class="letter l6"><path d="M578 -30Q429 -30 317.0 45.0Q205 120 142.5 249.0Q80 378 80 540Q80 705 143.5 833.5Q207 962 322.0 1036.0Q437 1110 592 1110Q746 1110 851.0 1035.0Q956 960 1010.0 831.0Q1064 702 1064 540Q1064 378 1009.5 249.0Q955 120 847.0 45.0Q739 -30 578 -30ZM622 212Q713 212 767.5 253.0Q822 294 846.0 368.0Q870 442 870 540Q870 638 846.0 712.0Q822 786 769.5 827.0Q717 868 632 868Q541 868 482.5 823.5Q424 779 396.0 704.5Q368 630 368 540Q368 449 395.0 374.5Q422 300 478.0 256.0Q534 212 622 212ZM870 0V740H836V1440H1110V0Z" transform="translate(890.240 230) scale(0.12 -0.12)" fill="#191919"/></g>
                </g>
              </svg>
            </div>

            <p class="hero-eyebrow"><?php echo esc_html($settings['eyebrow']); ?></p>
            <h1 class="hero-headline">
              <?php echo esc_html($settings['headline_p1']); ?> <span class="unfold-word"><?php echo esc_html($settings['headline_highlight']); ?></span>
            </h1>
            <p class="hero-descriptor"><?php echo esc_html($settings['descriptor']); ?></p>

            <div class="hero-cta-group">
              <a href="<?php echo esc_url($settings['primary_btn_url']['url']); ?>" class="btn btn-primary">
                <?php echo esc_html($settings['primary_btn_text']); ?>
                <svg class="btn-icon-arrow" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
              <a href="<?php echo esc_url($settings['secondary_btn_url']['url']); ?>" class="btn btn-outline">
                <?php echo esc_html($settings['secondary_btn_text']); ?>
              </a>
            </div>
          </div>

          <div class="hero-scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
          </div>
        </section>
        <?php
    }
}
