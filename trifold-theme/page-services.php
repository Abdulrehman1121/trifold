<?php
/**
 * Template Name: Services Page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <span class="kicker"><?php esc_html_e('Core Capabilities', 'trifold'); ?></span>
    <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
      <?php esc_html_e('CONNECTED CAPABILITIES.', 'trifold'); ?>
    </h1>
    <p style="font-size: var(--font-size-lead); max-width: 740px; margin-bottom: 60px;">
      <?php esc_html_e('We connect branding, design and development so every customer touchpoint feels like part of the same business. Explore our three pillars below.', 'trifold'); ?>
    </p>

    <!-- 01 Brand Identity -->
    <div style="background-color: #FFFFFF; border: 1px solid var(--border-light); border-radius: 8px; padding: 60px 48px; margin-bottom: 40px;">
      <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 24px;">
        <h2 style="font-size: var(--font-size-h2);"><span class="text-vermilion">01 /</span> <?php esc_html_e('Brand Identity', 'trifold'); ?></h2>
        <a href="<?php echo esc_url(home_url('/services/brand-identity/')); ?>" class="btn btn-outline"><?php esc_html_e('Deep Dive →', 'trifold'); ?></a>
      </div>
      <p style="font-size: var(--font-size-lead); color: var(--color-text-muted); max-width: 800px; margin-bottom: 40px;">
        <?php esc_html_e('Brand discovery, strategic positioning, logo design, colour and typography systems, and comprehensive brand guidelines.', 'trifold'); ?>
      </p>
      <div class="subservice-icon-grid">
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-strategy.svg'); ?>" alt=""> Brand Strategy</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-identity.svg'); ?>" alt=""> Visual Identity</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-logo-design.svg'); ?>" alt=""> Logo Design</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-color-systems.svg'); ?>" alt=""> Colour Systems</div>
      </div>
    </div>

    <!-- 02 Websites -->
    <div style="background-color: #FFFFFF; border: 1px solid var(--border-light); border-radius: 8px; padding: 60px 48px; margin-bottom: 40px;">
      <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 24px;">
        <h2 style="font-size: var(--font-size-h2);"><span class="text-vermilion">02 /</span> <?php esc_html_e('Websites & Engineering', 'trifold'); ?></h2>
        <a href="<?php echo esc_url(home_url('/services/websites/')); ?>" class="btn btn-outline"><?php esc_html_e('Deep Dive →', 'trifold'); ?></a>
      </div>
      <p style="font-size: var(--font-size-lead); color: var(--color-text-muted); max-width: 800px; margin-bottom: 40px;">
        <?php esc_html_e('Website strategy, UX and UI design, custom WordPress and Elementor development, ecommerce solutions, and speed optimization.', 'trifold'); ?>
      </p>
      <div class="subservice-icon-grid">
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-web-strategy.svg'); ?>" alt=""> Website Strategy</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ux-design.svg'); ?>" alt=""> UX Architecture</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-wordpress.svg'); ?>" alt=""> WordPress Development</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ecommerce.svg'); ?>" alt=""> Modern Ecommerce</div>
      </div>
    </div>

    <!-- 03 Graphic Design -->
    <div style="background-color: #FFFFFF; border: 1px solid var(--border-light); border-radius: 8px; padding: 60px 48px; margin-bottom: 40px;">
      <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 24px;">
        <h2 style="font-size: var(--font-size-h2);"><span class="text-vermilion">03 /</span> <?php esc_html_e('Graphic Design', 'trifold'); ?></h2>
        <a href="<?php echo esc_url(home_url('/services/graphic-design/')); ?>" class="btn btn-outline"><?php esc_html_e('Deep Dive →', 'trifold'); ?></a>
      </div>
      <p style="font-size: var(--font-size-lead); color: var(--color-text-muted); max-width: 800px; margin-bottom: 40px;">
        <?php esc_html_e('Social media graphics, campaign creatives, pitch presentations, company profiles, brochures, print collateral, and marketing assets.', 'trifold'); ?>
      </p>
      <div class="subservice-icon-grid">
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-social-media.svg'); ?>" alt=""> Social Media Content</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-campaign-design.svg'); ?>" alt=""> Campaign Creative</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-presentation.svg'); ?>" alt=""> Presentations</div>
        <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-company-profile.svg'); ?>" alt=""> Company Profiles</div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
