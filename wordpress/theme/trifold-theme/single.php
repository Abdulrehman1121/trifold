<?php
/**
 * Single Post Template (Insights / Articles)
 *
 * @package Trifold
 */

get_header();

while ( have_posts() ) :
    the_post();
    $categories = get_the_category();
    $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Perspective';
    $post_date = get_the_date( 'F Y' );
    $reading_time = ceil( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 200 );
    if ( $reading_time < 1 ) {
        $reading_time = 3;
    }
?>

<main id="primary" class="site-main article-single-view">
  <header class="article-header" style="padding-top: 140px; padding-bottom: 60px; border-bottom: 1px solid var(--border-light);">
    <div class="container" style="max-width: 900px;">
      <span class="kicker"><?php echo $cat_name; ?></span>
      <h1 style="font-size: clamp(2.4rem, 5vw, 4.2rem); line-height: 1.05; letter-spacing: -0.03em; margin: 16px 0 24px;">
        <?php the_title(); ?>
      </h1>
      <p style="font-size: 0.95rem; color: #888;">
        Published by Trifold Studio · <?php echo esc_html( $reading_time ); ?> Min Read · <?php echo esc_html( $post_date ); ?>
      </p>
    </div>
  </header>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="container" style="max-width: 1000px; margin: 40px auto 0;">
      <div class="featured-media" style="border-radius: var(--radius-sm); overflow: hidden; border: 1px solid var(--border-light);">
        <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto; display: block;' ) ); ?>
      </div>
    </div>
  <?php endif; ?>

  <article class="article-body" style="max-width: 800px; margin: 60px auto 100px; padding: 0 24px;">
    <div class="entry-content" style="font-size: 1.15rem; line-height: 1.8; color: #2D2D2D;">
      <?php the_content(); ?>
    </div>

    <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid var(--border-light); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
      <a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="btn btn-outline">← Back to Insights</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-vermilion">Discuss Your Brand &amp; Web Project</a>
    </div>
  </article>
</main>

<?php
endwhile;

get_footer();
