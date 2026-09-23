<?php
/**
 * Trifold Services Accordion Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Trifold_Services_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_services';
    }

    public function get_title() {
        return esc_html__('Trifold Services Experience', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-accordion';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => esc_html__('Section Header', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('heading', [
            'label'   => esc_html__('Main Heading', 'trifold-core'),
            'type'    => Controls_Manager::TEXT,
            'default' => 'WHAT WE DO.',
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="services-section" id="services">
          <div class="container">
            <span class="kicker"><?php esc_html_e('Three Connected Pillars', 'trifold-core'); ?></span>
            <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php echo esc_html($settings['heading']); ?></h2>

            <div class="service-accordion-group">
              <!-- Pillar 01 -->
              <div class="service-row-item open">
                <div class="service-row-header">
                  <div class="service-row-left">
                    <span class="service-row-num">01</span>
                    <h3 class="service-row-title"><?php esc_html_e('Brand Identity', 'trifold-core'); ?></h3>
                  </div>
                  <div class="service-row-toggle">+</div>
                </div>
                <div class="service-row-body">
                  <div class="service-row-body-inner">
                    <div>
                      <p class="service-row-desc"><?php esc_html_e('Strategic positioning, logo design, colour and typography systems, and brand guidelines.', 'trifold-core'); ?></p>
                      <a href="/services/brand-identity/" class="btn btn-outline" style="margin-top: 32px;"><?php esc_html_e('Explore Brand Identity', 'trifold-core'); ?></a>
                    </div>
                    <div class="subservice-icon-grid">
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-strategy.svg'); ?>" alt=""> Brand Strategy</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-identity.svg'); ?>" alt=""> Visual Identity</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-logo-design.svg'); ?>" alt=""> Logo Design</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-color-systems.svg'); ?>" alt=""> Colour Systems</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pillar 02 -->
              <div class="service-row-item">
                <div class="service-row-header">
                  <div class="service-row-left">
                    <span class="service-row-num">02</span>
                    <h3 class="service-row-title"><?php esc_html_e('Websites', 'trifold-core'); ?></h3>
                  </div>
                  <div class="service-row-toggle">+</div>
                </div>
                <div class="service-row-body">
                  <div class="service-row-body-inner">
                    <div>
                      <p class="service-row-desc"><?php esc_html_e('Website strategy, UX and UI design, custom WordPress and Elementor development, ecommerce.', 'trifold-core'); ?></p>
                      <a href="/services/websites/" class="btn btn-outline" style="margin-top: 32px;"><?php esc_html_e('Explore Websites', 'trifold-core'); ?></a>
                    </div>
                    <div class="subservice-icon-grid">
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-web-strategy.svg'); ?>" alt=""> Website Strategy</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ux-design.svg'); ?>" alt=""> UX Architecture</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-wordpress.svg'); ?>" alt=""> WordPress Development</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ecommerce.svg'); ?>" alt=""> Modern Ecommerce</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pillar 03 -->
              <div class="service-row-item">
                <div class="service-row-header">
                  <div class="service-row-left">
                    <span class="service-row-num">03</span>
                    <h3 class="service-row-title"><?php esc_html_e('Graphic Design', 'trifold-core'); ?></h3>
                  </div>
                  <div class="service-row-toggle">+</div>
                </div>
                <div class="service-row-body">
                  <div class="service-row-body-inner">
                    <div>
                      <p class="service-row-desc"><?php esc_html_e('Social media graphics, campaign creatives, pitch presentations, company profiles, brochures, print collateral.', 'trifold-core'); ?></p>
                      <a href="/services/graphic-design/" class="btn btn-outline" style="margin-top: 32px;"><?php esc_html_e('Explore Graphic Design', 'trifold-core'); ?></a>
                    </div>
                    <div class="subservice-icon-grid">
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-social-media.svg'); ?>" alt=""> Social Media Content</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-campaign-design.svg'); ?>" alt=""> Campaign Creative</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-presentation.svg'); ?>" alt=""> Presentations</div>
                      <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-company-profile.svg'); ?>" alt=""> Company Profiles</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
    }
}
