<?php
/**
 * Search Results Template
 *
 * @package Trifold
 */

get_header();
?>

<main id="primary" class="site-main" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <header class="page-header" style="margin-bottom: 60px;">
      <span class="kicker"><?php esc_html_e( 'Search Results', 'trifold' ); ?></span>
      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em;">
        <?php
        /* translators: %s: search query. */
        printf( esc_html__( 'RESULTS FOR: %s', 'trifold' ), '<span style="color: var(--color-vermilion);">' . get_search_query() . '</span>' );
        ?>
      </h1>
    </header>

    <?php if ( have_posts() ) : ?>
      <div class="grid-12" style="row-gap: 60px;">
        <?php
        while ( have_posts() ) :
            the_post();
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?> style="grid-column: span 6;">
            <div class="article-meta" style="margin-bottom: 12px; font-size: 0.85rem; color: #888;">
              <span style="color: var(--color-vermilion); font-weight: 700; text-transform: uppercase;">
                <?php echo esc_html( get_post_type() ); ?>
              </span>
              <span> · <?php echo esc_html( get_the_date( 'F Y' ) ); ?></span>
            </div>
            <h2 style="font-size: 1.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 12px;">
              <a href="<?php the_permalink(); ?>" style="color: var(--color-ink); text-decoration: none;">
                <?php the_title(); ?>
              </a>
            </h2>
            <p style="font-size: 1rem; color: #666; line-height: 1.6; margin-bottom: 20px;">
              <?php echo wp_trim_words( get_the_excerpt(), 24 ); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn-text" style="font-weight: 700; color: var(--color-vermilion);">View Content →</a>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination-wrapper" style="margin-top: 80px; text-align: center;">
        <?php
        the_posts_pagination(
            array(
                'mid_size'  => 2,
                'prev_text' => __( '← Previous', 'trifold' ),
                'next_text' => __( 'Next →', 'trifold' ),
            )
        );
        ?>
      </div>
    <?php else : ?>
      <div style="padding: 60px 0; text-align: center; max-width: 600px; margin: 0 auto;">
        <h2><?php esc_html_e( 'No Matches Found', 'trifold' ); ?></h2>
        <p style="color: #666; margin: 16px 0 32px;">
          <?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with different keywords.', 'trifold' ); ?>
        </p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Return Home', 'trifold' ); ?></a>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
