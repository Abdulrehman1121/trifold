<?php
/**
 * Trifold Cinematic Portfolio Carousel Elementor Widget
 */

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Trifold_Carousel_Widget extends Widget_Base {
    public function get_name() {
        return 'trifold_carousel';
    }

    public function get_title() {
        return esc_html__('Trifold Cinematic Portfolio', 'trifold-core');
    }

    public function get_icon() {
        return 'eicon-slider-push';
    }

    public function get_categories() {
        return ['trifold-category'];
    }

    protected function register_controls() {
        $this->start_controls_section('query_section', [
            'label' => esc_html__('Portfolio Query', 'trifold-core'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('posts_per_page', [
            'label'   => esc_html__('Number of Projects to Display', 'trifold-core'),
            'type'    => Controls_Manager::NUMBER,
            'default' => 8,
            'min'     => 3,
            'max'     => 16,
        ]);

        $this->add_control('featured_only', [
            'label'        => esc_html__('Featured Projects Only', 'trifold-core'),
            'type'         => Controls_Manager::SWITCHER,
            'default'      => 'yes',
            'return_value' => 'yes',
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $args = [
            'post_type'      => 'project',
            'posts_per_page' => $settings['posts_per_page'],
            'meta_key'       => '_trifold_order',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
        ];

        if ($settings['featured_only'] === 'yes') {
            $args['meta_query'] = [
                [
                    'key'     => '_trifold_featured',
                    'value'   => '1',
                    'compare' => '='
                ]
            ];
        }

        $query = new WP_Query($args);
        ?>
        <section class="cinematic-portfolio-section" id="portfolio" data-cursor="drag">
          <div class="container">
            <div class="portfolio-header-row">
              <div>
                <span class="kicker"><?php esc_html_e('Selected Projects', 'trifold-core'); ?></span>
                <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('WORK THAT CONNECTS THE DOTS.', 'trifold-core'); ?></h2>
              </div>
              <a href="<?php echo esc_url(get_post_type_archive_link('project')); ?>" class="btn btn-outline"><?php esc_html_e('View all projects', 'trifold-core'); ?></a>
            </div>
          </div>

          <div class="carousel-stage-wrapper">
            <div class="carousel-track">
              <?php
              $idx = 0;
              if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post();
                      $idx++;
                      $bg_color = get_post_meta(get_the_ID(), '_trifold_bg_color', true) ?: '#F5F2EB';
                      $contribution = get_post_meta(get_the_ID(), '_trifold_contribution', true) ?: 'To be confirmed';
                      $industry = get_post_meta(get_the_ID(), '_trifold_industry', true);
                      $year = get_post_meta(get_the_ID(), '_trifold_year', true) ?: '2026';
                      $desktop_img = get_post_meta(get_the_ID(), '_trifold_desktop_image', true);
                      $active_cls = ($idx === 1) ? ' active' : '';
                      ?>
                      <div class="carousel-slide<?php echo esc_attr($active_cls); ?>" data-bg="<?php echo esc_attr($bg_color); ?>">
                        <a href="<?php the_permalink(); ?>" data-cursor="view" class="slide-media-card">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'slide-image']); ?>
                          <?php elseif ($desktop_img) : ?>
                            <img src="<?php echo esc_url($desktop_img); ?>" alt="<?php the_title_attribute(); ?>" class="slide-image">
                          <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/sumus-desktop.svg'); ?>" alt="<?php the_title_attribute(); ?>" class="slide-image">
                          <?php endif; ?>
                        </a>
                        <div class="slide-info-row">
                          <div class="slide-meta-left">
                            <h3 class="slide-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="slide-industry"><?php echo esc_html($industry); ?></p>
                          </div>
                          <div class="slide-meta-right">
                            <span class="slide-contribution-tag"><?php echo esc_html($contribution); ?></span>
                            <span style="font-size: 0.85rem; color: #888;"><?php echo esc_html($year); ?></span>
                          </div>
                        </div>
                      </div>
                      <?php
                  endwhile;
                  wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>

          <div class="container">
            <div class="carousel-nav-bar">
              <div class="carousel-counter">01 / <?php echo str_pad($query->found_posts ?: $idx, 2, '0', STR_PAD_LEFT); ?></div>
              <div class="carousel-arrows">
                <button class="carousel-arrow-btn carousel-prev" aria-label="Previous Project">←</button>
                <button class="carousel-arrow-btn carousel-next" aria-label="Next Project">→</button>
              </div>
            </div>
          </div>
        </section>
        <?php
    }
}
