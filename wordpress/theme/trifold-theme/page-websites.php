<?php
/**
 * Template Name: Websites & WordPress Service
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main>
  <section class="service-detail-hero" style="padding-top: 140px; padding-bottom: 80px; border-bottom: 1px solid var(--border-light);">
    <div class="container">
      <span class="kicker">Pillar 02</span>
      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
        WEBSITES &amp; WORDPRESS.
      </h1>
      <p style="font-size: var(--font-size-lead); max-width: 760px; color: var(--color-text-muted);">
        A considered digital experience. We engineer bespoke WordPress websites that pair high-end editorial art direction with sub-second loading speeds and complete client dashboard control.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 style="font-size: var(--font-size-h2);">OUR CAPABILITIES IN WEB ENGINEERING</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; margin: 64px 0;">
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ui-design.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">UX &amp; UI Design</h3>
          <p style="font-size: 0.95rem; color: #666;">Frictionless user flows, wireframes, and responsive component libraries that communicate value immediately.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-wordpress.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Custom WordPress Themes</h3>
          <p style="font-size: 0.95rem; color: #666;">Clean, bespoke PHP/Gutenberg architectures without third-party bloat or plugin dependencies.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-elementor.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Elementor Architecture</h3>
          <p style="font-size: 0.95rem; color: #666;">Custom-built native Trifold widgets empowering you to update typography, layouts, and projects visually.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ecommerce.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Modern Ecommerce</h3>
          <p style="font-size: 0.95rem; color: #666;">Conversion-led product catalogs, frictionless checkout journeys, and inventory synchronization.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-website-optimization.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Speed &amp; Core Web Vitals</h3>
          <p style="font-size: 0.95rem; color: #666;">Sub-second LCP, zero CLS shifts, local asset delivery, responsive image sets, and clean caching.</p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 36px 28px;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-development.svg'); ?>" alt="" style="width: 40px; height: 40px; margin-bottom: 20px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 12px;">Ongoing Improvements</h3>
          <p style="font-size: 0.95rem; color: #666;">Continuous feature evolution, security audits, CMS updates, and technical SEO monitoring.</p>
        </div>
      </div>
      <div style="text-align: center; margin-top: 60px;">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" style="font-size: 1.1rem; padding: 18px 40px;">Discuss Your Website Project</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
