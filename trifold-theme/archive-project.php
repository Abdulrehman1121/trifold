<?php
/**
 * Template Name: Portfolio Index
 * Archive Template for 'project' CPT
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <span class="kicker"><?php esc_html_e('Portfolio & Case Studies', 'trifold'); ?></span>
    <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
      <?php esc_html_e('WORK THAT CONNECTS.', 'trifold'); ?>
    </h1>
    <p style="font-size: var(--font-size-lead); max-width: 720px; margin-bottom: 48px;">
      <?php esc_html_e('Identity, websites and design created as parts of one system. Browse featured client projects and concept explorations below.', 'trifold'); ?>
    </p>

    <!-- Category Filter Bar -->
    <div class="portfolio-filter-bar">
      <button class="filter-btn active" data-filter="all"><?php esc_html_e('All Work', 'trifold'); ?></button>
      <button class="filter-btn" data-filter="websites"><?php esc_html_e('Websites', 'trifold'); ?></button>
      <button class="filter-btn" data-filter="branding"><?php esc_html_e('Brand Identity', 'trifold'); ?></button>
      <button class="filter-btn" data-filter="graphic"><?php esc_html_e('Graphic Design', 'trifold'); ?></button>
      <button class="filter-btn" data-filter="concept"><?php esc_html_e('Concept Projects', 'trifold'); ?></button>
    </div>

    <!-- Portfolio Grid -->
    <div class="portfolio-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 48px; margin-top: 56px;">
      <?php
      $projects = new WP_Query([
          'post_type'      => 'project',
          'posts_per_page' => -1,
          'meta_key'       => '_trifold_order',
          'orderby'        => 'meta_value_num',
          'order'          => 'ASC',
      ]);

      if ($projects->have_posts()) :
          while ($projects->have_posts()) : $projects->the_post();
              $contribution = get_post_meta(get_the_ID(), '_trifold_contribution', true) ?: 'To be confirmed';
              $industry = get_post_meta(get_the_ID(), '_trifold_industry', true);
              $year = get_post_meta(get_the_ID(), '_trifold_year', true) ?: '2026';
              $desktop_img = get_post_meta(get_the_ID(), '_trifold_desktop_image', true);
              $is_concept = ($contribution === 'Concept Project');
              $category_slugs = wp_get_post_terms(get_the_ID(), 'project_service', ['fields' => 'slugs']);
              $category_str = implode(' ', $category_slugs);
              if ($is_concept) $category_str .= ' concept';
              ?>
              <div class="portfolio-grid-item" data-category="<?php echo esc_attr($category_str); ?>">
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
                  <div>
                    <h3 class="slide-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="slide-industry"><?php echo esc_html($industry); ?> · <?php echo esc_html($year); ?></p>
                  </div>
                  <span class="slide-contribution-tag<?php echo $is_concept ? ' concept' : ''; ?>">
                    <?php echo esc_html($is_concept ? 'CONCEPT PROJECT' : 'Contribution: ' . $contribution); ?>
                  </span>
                </div>
              </div>
              <?php
          endwhile;
          wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
