<?php
/**
 * Default Page Template
 *
 * @package Trifold
 */

get_header();
?>

<main id="primary" class="site-main" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <?php
    while ( have_posts() ) :
        the_post();
    ?>
      <header class="page-header" style="margin-bottom: 48px;">
        <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em;">
          <?php the_title(); ?>
        </h1>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="page-featured-media" style="margin-bottom: 48px; border-radius: var(--radius-sm); overflow: hidden; border: 1px solid var(--border-light);">
          <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto; display: block;' ) ); ?>
        </div>
      <?php endif; ?>

      <div class="entry-content" style="font-size: 1.15rem; line-height: 1.8; color: #2D2D2D; max-width: 900px;">
        <?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'trifold' ),
                'after'  => '</div>',
            )
        );
        ?>
      </div>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();
