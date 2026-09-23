<?php
/**
 * Template Name: SEO Service Landing Page
 *
 * @package Trifold
 */

get_header();
?>

<main id="primary" class="site-main" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <span class="kicker"><?php esc_html_e( 'Specialized Service', 'trifold' ); ?></span>
    <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
      <?php the_title(); ?>
    </h1>

    <?php
    while ( have_posts() ) :
        the_post();
        if ( get_the_content() ) :
    ?>
      <div class="entry-content" style="margin-bottom: 60px;">
        <?php the_content(); ?>
      </div>
    <?php else : ?>
      <p style="font-size: var(--font-size-lead); max-width: 760px; color: var(--color-text-muted); margin-bottom: 60px;">
        We build bespoke, lightweight WordPress architectures for businesses that need sub-second load times, total content autonomy, and zero third-party plugin vulnerability.
      </p>

      <div class="grid-12" style="margin-bottom: 80px;">
        <div style="grid-column: span 6;">
          <h2 style="font-size: 2rem; margin-bottom: 20px;">Why Custom Engineering Outperforms Off-The-Shelf Themes</h2>
          <p style="font-size: 1.1rem; line-height: 1.7; color: #555; margin-bottom: 20px;">
            Pre-built marketplace themes bundle thousands of unused CSS and JavaScript files, leading to sluggish Google Core Web Vitals, high server overhead, and frequent plugin update conflicts.
          </p>
          <p style="font-size: 1.1rem; line-height: 1.7; color: #555;">
            Trifold engineers each theme from clean, semantic foundations. Every stylesheet, script, and database query is purpose-built for your specific brand and content model.
          </p>
        </div>
        <div style="grid-column: span 6;">
          <div style="background-color: #FFFFFF; border: 1px solid var(--border-light); border-radius: 8px; padding: 40px;">
            <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 20px;">Engineering Standards</h3>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px;">
              <li style="display: flex; gap: 12px; font-weight: 600;"><span style="color: var(--color-vermilion);">✓</span> 100% Score Potential on Core Web Vitals</li>
              <li style="display: flex; gap: 12px; font-weight: 600;"><span style="color: var(--color-vermilion);">✓</span> Custom Gutenberg Blocks &amp; Native Meta Fields</li>
              <li style="display: flex; gap: 12px; font-weight: 600;"><span style="color: var(--color-vermilion);">✓</span> Elementor Compatibility with Dedicated Widgets</li>
              <li style="display: flex; gap: 12px; font-weight: 600;"><span style="color: var(--color-vermilion);">✓</span> Local Manrope Typography &amp; SVG Optimization</li>
              <li style="display: flex; gap: 12px; font-weight: 600;"><span style="color: var(--color-vermilion);">✓</span> Semantic Schema Markup (JSON-LD) Built In</li>
            </ul>
          </div>
        </div>
      </div>
    <?php
        endif;
    endwhile;
    ?>

    <div style="text-align: center;">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 18px 44px;">Start Your WordPress Project</a>
    </div>
  </div>
</main>

<?php
get_footer();
