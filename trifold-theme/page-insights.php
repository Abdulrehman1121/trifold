<?php
/**
 * Template Name: Insights Archive
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <span class="kicker"><?php esc_html_e('Studio Journal', 'trifold'); ?></span>
    <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
      <?php esc_html_e('INSIGHTS & WRITING.', 'trifold'); ?>
    </h1>
    <p style="font-size: var(--font-size-lead); max-width: 760px; color: var(--color-text-muted); margin-bottom: 64px;">
      <?php esc_html_e('Practical articles on digital strategy, typography, WordPress architecture, and brand consistency.', 'trifold'); ?>
    </p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
      <?php
      $posts_query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 12]);
      if ($posts_query->have_posts()) :
          while ($posts_query->have_posts()) : $posts_query->the_post();
              ?>
              <article class="insight-card">
                <span class="insight-meta"><?php echo esc_html(get_the_date('M Y')); ?></span>
                <h2 class="insight-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="insight-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
                <a href="<?php the_permalink(); ?>" style="font-size: 0.9rem; font-weight: 700; color: #191919;"><?php esc_html_e('Read Full Article →', 'trifold'); ?></a>
              </article>
              <?php
          endwhile;
          wp_reset_postdata();
      else :
          ?>
          <p><?php esc_html_e('No articles published yet.', 'trifold'); ?></p>
          <?php
      endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
