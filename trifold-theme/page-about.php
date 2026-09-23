<?php
/**
 * Template Name: About Page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main>
  <section class="about-hero" style="padding-top: 140px; padding-bottom: 80px; border-bottom: 1px solid var(--border-light);">
    <div class="container">
      <span class="kicker"><?php esc_html_e('About Trifold', 'trifold'); ?></span>
      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
        <?php esc_html_e('BUILT FOR BUSINESSES THAT WANT EVERYTHING TO FEEL CONNECTED.', 'trifold'); ?>
      </h1>
      <p style="font-size: var(--font-size-lead); max-width: 820px; color: var(--color-ink); line-height: 1.7; margin-bottom: 32px;">
        Trifold was founded by <strong>Farhan Khan</strong>, <strong>Shayan Mutahir</strong> and <strong>Abdul Rehman Kaleem</strong> to bring creative thinking and practical execution closer together.
      </p>
      <p style="font-size: var(--font-size-lead); max-width: 820px; color: var(--color-text-muted); line-height: 1.7;">
        We shape brand identities, design and develop websites, and create the graphics businesses need to communicate with confidence. From the first idea to the final detail, we help your brand feel connected.
      </p>
    </div>
  </section>

  <!-- Principles -->
  <section class="section">
    <div class="container">
      <span class="kicker"><?php esc_html_e('Our Core Principles', 'trifold'); ?></span>
      <h2 style="font-size: var(--font-size-h2);"><?php esc_html_e('DESIGN WITH PURPOSE, BUILT FOR CONTINUITY.', 'trifold'); ?></h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; margin: 60px 0;">
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 40px 32px;">
          <span style="font-size: 1.5rem; font-weight: 800; color: var(--color-vermilion); display: block; margin-bottom: 16px;">01</span>
          <h3 style="font-size: 1.3rem; margin-bottom: 12px;"><?php esc_html_e('Clarity Over Noise', 'trifold'); ?></h3>
          <p style="font-size: 0.95rem; color: #666; line-height: 1.6;"><?php esc_html_e('We write with clarity, confidence, and warmth. We explain the business purpose behind design decisions rather than using empty industry jargon.', 'trifold'); ?></p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 40px 32px;">
          <span style="font-size: 1.5rem; font-weight: 800; color: var(--color-vermilion); display: block; margin-bottom: 16px;">02</span>
          <h3 style="font-size: 1.3rem; margin-bottom: 12px;"><?php esc_html_e('Unified Systems', 'trifold'); ?></h3>
          <p style="font-size: 0.95rem; color: #666; line-height: 1.6;"><?php esc_html_e('When branding, websites, and marketing collateral are treated as one connected discipline, your brand commands greater authority and trust.', 'trifold'); ?></p>
        </div>
        <div style="background: #FFF; border: 1px solid var(--border-light); border-radius: 6px; padding: 40px 32px;">
          <span style="font-size: 1.5rem; font-weight: 800; color: var(--color-vermilion); display: block; margin-bottom: 16px;">03</span>
          <h3 style="font-size: 1.3rem; margin-bottom: 12px;"><?php esc_html_e('Considered Execution', 'trifold'); ?></h3>
          <p style="font-size: 0.95rem; color: #666; line-height: 1.6;"><?php esc_html_e('Sub-second load times, fluid responsive behaviour, accessible contrast, and editable WordPress controls built for everyday business independence.', 'trifold'); ?></p>
        </div>
      </div>

      <!-- Founders Section -->
      <div style="margin-top: 80px;">
        <span class="kicker"><?php esc_html_e('Studio Leadership', 'trifold'); ?></span>
        <h2 style="font-size: var(--font-size-h2);"><?php esc_html_e('FOUNDING PARTNERS', 'trifold'); ?></h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 32px; margin: 48px 0;">
          <div style="background: var(--color-surface-subtle); border-radius: 6px; padding: 36px 28px;">
            <h3 style="font-size: 1.35rem; font-weight: 800; color: #191919; margin-bottom: 6px;">Farhan Khan</h3>
            <p style="font-size: 0.85rem; font-weight: 700; color: var(--color-vermilion); text-transform: uppercase; margin-bottom: 14px;">Co-Founder · Brand &amp; Creative Strategy</p>
            <p style="font-size: 0.95rem; color: #666;">Guiding brand positioning, editorial tone, and holistic digital strategy.</p>
          </div>
          <div style="background: var(--color-surface-subtle); border-radius: 6px; padding: 36px 28px;">
            <h3 style="font-size: 1.35rem; font-weight: 800; color: #191919; margin-bottom: 6px;">Shayan Mutahir</h3>
            <p style="font-size: 0.85rem; font-weight: 700; color: var(--color-vermilion); text-transform: uppercase; margin-bottom: 14px;">Co-Founder · Design &amp; Art Direction</p>
            <p style="font-size: 0.95rem; color: #666;">Directing typography systems, visual geometry, and high-fidelity interaction design.</p>
          </div>
          <div style="background: var(--color-surface-subtle); border-radius: 6px; padding: 36px 28px;">
            <h3 style="font-size: 1.35rem; font-weight: 800; color: #191919; margin-bottom: 6px;">Abdul Rehman Kaleem</h3>
            <p style="font-size: 0.85rem; font-weight: 700; color: var(--color-vermilion); text-transform: uppercase; margin-bottom: 14px;">Co-Founder · Technical &amp; WordPress Architecture</p>
            <p style="font-size: 0.95rem; color: #666;">Engineering performant WordPress themes, custom CMS controls, and front-end motion.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
