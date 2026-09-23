<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Trifold
 */

get_header();

$contact_email = get_theme_mod( 'trifold_contact_email', 'hello@trifold.agency' );
?>

<main id="primary" class="site-main" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container" style="max-width: 860px;">
    <span class="kicker"><?php esc_html_e( 'Legal Foundations', 'trifold' ); ?></span>
    <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 32px;">
      <?php the_title(); ?>
    </h1>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            if ( get_the_content() ) :
                echo '<div class="entry-content" style="font-size: 1.15rem; line-height: 1.8; color: #2D2D2D;">';
                the_content();
                echo '</div>';
            else :
    ?>
      <p style="font-size: 1.15rem; line-height: 1.8; margin-bottom: 24px;">
        Trifold (&ldquo;we&rdquo;, &ldquo;us&rdquo;, or &ldquo;our&rdquo;) respects your privacy and is committed to protecting the personal information you share with us through our digital touchpoints and project planners.
      </p>
      <h2 style="font-size: 1.6rem; margin: 36px 0 16px;">1. Information We Collect</h2>
      <p style="font-size: 1.05rem; line-height: 1.7; color: #555; margin-bottom: 20px;">
        When you submit an inquiry through our interactive project planner, we collect your name, business email address, company details, and project objectives. This data is exclusively used to evaluate your brief and respond with discussion availability.
      </p>
      <h2 style="font-size: 1.6rem; margin: 36px 0 16px;">2. Analytics &amp; Cookies</h2>
      <p style="font-size: 1.05rem; line-height: 1.7; color: #555; margin-bottom: 20px;">
        We collect anonymized telemetry data strictly to optimize site performance, responsive rendering, and Core Web Vitals. We do not sell or monetize personal data to third parties.
      </p>
      <h2 style="font-size: 1.6rem; margin: 36px 0 16px;">3. Contact &amp; Governance</h2>
      <p style="font-size: 1.05rem; line-height: 1.7; color: #555;">
        For inquiries regarding data retention or deletion, contact our studio team at <a href="mailto:<?php echo esc_attr( $contact_email ); ?>" style="color: var(--color-vermilion);"><?php echo esc_html( $contact_email ); ?></a>.
      </p>
    <?php
            endif;
        endwhile;
    endif;
    ?>
  </div>
</main>

<?php
get_footer();
