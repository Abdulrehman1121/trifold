<?php
/**
 * Trifold Graphic Design Concept Wall Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;

class Trifold_Graphic_Wall_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_graphic_wall';
    }

    public function get_title() {
        return esc_html__('Trifold Concept Design Wall', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function render() {
        ?>
        <section class="graphic-wall-section" id="concepts">
          <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end;">
              <div>
                <span class="kicker"><?php esc_html_e('Exploratory Studio', 'trifold-core'); ?></span>
                <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('GRAPHIC DESIGN & BRAND SYSTEMS.', 'trifold-core'); ?></h2>
              </div>
              <span class="tag-badge concept" style="align-self: flex-end;"><?php esc_html_e('Concept Projects', 'trifold-core'); ?></span>
            </div>

            <div class="graphic-wall-grid">
              <div class="graphic-wall-card">
                <a href="/project/concept-atelier-kanso/" data-cursor="view">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/concept-atelier-kanso.svg'); ?>" alt="Atelier Kanso" class="graphic-poster-img">
                </a>
                <div class="graphic-card-body">
                  <div>
                    <h3 style="font-size: 1.4rem; font-weight: 800; color: #191919;">Atelier Kanso</h3>
                    <p style="font-size: 0.9rem; color: #666;">Architecture &amp; Spatial Studio</p>
                  </div>
                  <span class="tag-badge concept">CONCEPT PROJECT</span>
                </div>
              </div>

              <div class="graphic-wall-card">
                <a href="/project/concept-kohi-roasters/" data-cursor="view">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/concept-kohi-roasters.svg'); ?>" alt="Kohi Craft Roasters" class="graphic-poster-img">
                </a>
                <div class="graphic-card-body">
                  <div>
                    <h3 style="font-size: 1.4rem; font-weight: 800; color: #191919;">Kōhī Craft Roasters</h3>
                    <p style="font-size: 0.9rem; color: #666;">Specialty Coffee Packaging</p>
                  </div>
                  <span class="tag-badge concept">CONCEPT PROJECT</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
    }
}
