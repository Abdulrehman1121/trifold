<?php
/**
 * Template Name: Graphic Design Service
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main>
  <section class="service-detail-hero" style="padding-top: 140px; padding-bottom: 80px; border-bottom: 1px solid var(--border-light);">
    <div class="container">
      <span class="kicker">Pillar 03</span>
      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
        GRAPHIC DESIGN.
      </h1>
      <p style="font-size: var(--font-size-lead); max-width: 760px; color: var(--color-text-muted);">
        Consistency wherever your business shows up. We craft high-impact marketing collateral, social design systems, company profiles, and presentation decks.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 style="font-size: var(--font-size-h2);">OUR CAPABILITIES IN GRAPHIC DESIGN</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; margin: 64px 0;">
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-social-media.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Social Media Systems</h3>
          <p style="font-size: 0.95rem; color: #666;">Multi-format templates for Instagram, LinkedIn, and X engineered to maintain visual recognition in noisy feeds.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-presentation.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Presentations &amp; Pitch Decks</h3>
          <p style="font-size: 0.95rem; color: #666;">Persuasive, highly structured slide decks in Figma or Keynote designed for investor meetings and enterprise sales.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-company-profile.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Company Profiles &amp; Reports</h3>
          <p style="font-size: 0.95rem; color: #666;">Editorial PDF brochures, whitepapers, and annual reports that communicate corporate gravitas.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-campaign-design.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Campaign Creative</h3>
          <p style="font-size: 0.95rem; color: #666;">Digital ad units, display banners, and multi-channel launch collateral focused on conversion.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-print-design.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Print &amp; Editorial Collateral</h3>
          <p style="font-size: 0.95rem; color: #666;">Packaging, unboxing experiences, posters, and print publications with precise prepress color profiles.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-graphic-design.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Brand Applications</h3>
          <p style="font-size: 0.95rem; color: #666;">Exhibition displays, trade booth signage, merchandise, and environmental spatial graphics.</p>
        </div>
      </div>
      <div style="text-align: center; margin-top: 60px;">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 18px 40px;">Discuss Design Support</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
