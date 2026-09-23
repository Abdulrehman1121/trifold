<?php
/**
 * Template Name: Brand Identity Service
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main>
  <section class="service-detail-hero" style="padding-top: 140px; padding-bottom: 80px; border-bottom: 1px solid var(--border-light);">
    <div class="container">
      <span class="kicker">Pillar 01</span>
      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
        BRAND IDENTITY.
      </h1>
      <p style="font-size: var(--font-size-lead); max-width: 760px; color: var(--color-text-muted);">
        A considered identity turns an idea into an unmistakable asset. We create rigorous brand systems designed to endure across digital interfaces, physical stationery, and commercial environments.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 style="font-size: var(--font-size-h2);">OUR CAPABILITIES IN IDENTITY</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; margin: 64px 0;">
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-strategy.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Brand Strategy &amp; Positioning</h3>
          <p style="font-size: 0.95rem; color: #666;">Defining your differentiation, market niche, audience persona, and core narrative foundations.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-logo-design.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Logo &amp; Symbol Design</h3>
          <p style="font-size: 0.95rem; color: #666;">Crafting distinct, scalable marks with precise geometric negative space and vector balance.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-typography.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Typography Systems</h3>
          <p style="font-size: 0.95rem; color: #666;">Selecting and licensing type families with fluid proportional scales for screen and print.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-color-systems.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Colour Architectures</h3>
          <p style="font-size: 0.95rem; color: #666;">Harmonious palettes engineered for contrast, accessibility compliance (WCAG), and focus accents.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-guidelines.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Brand Guidelines &amp; Manuals</h3>
          <p style="font-size: 0.95rem; color: #666;">Clear rules for internal teams and external vendors covering clearspace, dos and don'ts.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-collateral.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Brand Collateral &amp; Stationery</h3>
          <p style="font-size: 0.95rem; color: #666;">Business cards, letterheads, proposal systems, and presentation decks carrying your brand.</p>
        </div>
      </div>
      <div style="text-align: center; margin-top: 60px;">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 18px 40px;">Commission a Brand Identity</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
