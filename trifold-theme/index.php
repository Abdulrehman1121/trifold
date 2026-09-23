<?php
/**
 * Main Fallback Template
 *
 * @package Trifold
 */

get_header();
?>

<main id="primary" class="site-main" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <header class="page-header" style="margin-bottom: 60px;">
      <?php if ( is_home() && ! is_front_page() ) : ?>
        <span class="kicker"><?php esc_html_e( 'Editorial & Perspectives', 'trifold' ); ?></span>
        <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em;">
          <?php single_post_title(); ?>
        </h1>
      <?php elseif ( is_archive() ) : ?>
        <span class="kicker"><?php esc_html_e( 'Archive', 'trifold' ); ?></span>
        <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em;">
          <?php the_archive_title(); ?>
        </h1>
      <?php else : ?>
        <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em;">
          <?php the_title(); ?>
        </h1>
      <?php endif; ?>
    </header>

    <?php if ( have_posts() ) : ?>
      <div class="grid-12" style="row-gap: 60px;">
        <?php
        while ( have_posts() ) :
            the_post();
            $categories = get_the_category();
            $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Perspective';
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?> style="grid-column: span 6;">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="article-thumb" style="display: block; margin-bottom: 20px; border-radius: var(--radius-sm); overflow: hidden; border: 1px solid var(--border-light);">
                <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: 320px; object-fit: cover;' ) ); ?>
              </a>
            <?php endif; ?>
            <div class="article-meta" style="margin-bottom: 12px; font-size: 0.85rem; color: #888;">
              <span style="color: var(--color-vermilion); font-weight: 700; text-transform: uppercase;"><?php echo $cat_name; ?></span>
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
            <a href="<?php the_permalink(); ?>" class="btn-text" style="font-weight: 700; color: var(--color-vermilion);">Read Article →</a>
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
      <div style="padding: 60px 0; text-align: center;">
        <h2><?php esc_html_e( 'Nothing Found', 'trifold' ); ?></h2>
        <p style="color: #666; margin-top: 12px;"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'trifold' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="margin-top: 24px;"><?php esc_html_e( 'Return Home', 'trifold' ); ?></a>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
