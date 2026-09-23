<?php
/**
 * Single Project / Case Study Template
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$client = get_post_meta(get_the_ID(), '_trifold_client', true);
$industry = get_post_meta(get_the_ID(), '_trifold_industry', true);
$country = get_post_meta(get_the_ID(), '_trifold_country', true);
$year = get_post_meta(get_the_ID(), '_trifold_year', true) ?: '2026';
$contribution = get_post_meta(get_the_ID(), '_trifold_contribution', true) ?: 'To be confirmed';
$website_url = get_post_meta(get_the_ID(), '_trifold_website_url', true);
$bg_color = get_post_meta(get_the_ID(), '_trifold_bg_color', true) ?: '#F5F2EB';
$desktop_img = get_post_meta(get_the_ID(), '_trifold_desktop_image', true);
$mobile_img = get_post_meta(get_the_ID(), '_trifold_mobile_image', true);
$challenge = get_post_meta(get_the_ID(), '_trifold_challenge', true);
$approach = get_post_meta(get_the_ID(), '_trifold_approach', true);
$is_concept = ($contribution === 'Concept Project');
?>

<main>
  <!-- Project Hero -->
  <section class="case-hero" style="padding-top: 140px; padding-bottom: 60px; background-color: <?php echo esc_attr($bg_color); ?>; border-bottom: 1px solid var(--border-light);">
    <div class="container">
      <?php if ($is_concept) : ?>
        <div style="display: flex; gap: 12px; align-items: center; margin-bottom: 16px;">
          <span class="tag-badge concept">CONCEPT PROJECT</span>
          <span style="font-size: 0.85rem; color: #888;"><?php esc_html_e('Self-Initiated Exploration', 'trifold'); ?></span>
        </div>
      <?php else : ?>
        <span class="kicker"><?php esc_html_e('Case Study', 'trifold'); ?></span>
      <?php endif; ?>

      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 24px;">
        <?php the_title(); ?>
      </h1>

      <?php if (has_excerpt()) : ?>
        <p style="font-size: var(--font-size-lead); max-width: 760px; color: var(--color-text-muted);">
          <?php echo get_the_excerpt(); ?>
        </p>
      <?php endif; ?>

      <!-- Meta Strip -->
      <div class="case-meta-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 32px; margin-top: 60px; padding-top: 40px; border-top: 1px solid var(--border-light);">
        <div>
          <div style="font-size: var(--font-size-label); text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-stone); margin-bottom: 8px;"><?php esc_html_e('Client', 'trifold'); ?></div>
          <div style="font-size: var(--font-size-body); font-weight: 700; color: var(--color-ink);"><?php echo esc_html($client ?: get_the_title()); ?></div>
        </div>
        <div>
          <div style="font-size: var(--font-size-label); text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-stone); margin-bottom: 8px;"><?php esc_html_e('Industry', 'trifold'); ?></div>
          <div style="font-size: var(--font-size-body); font-weight: 700; color: var(--color-ink);"><?php echo esc_html($industry ?: 'Digital'); ?></div>
        </div>
        <div>
          <div style="font-size: var(--font-size-label); text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-stone); margin-bottom: 8px;"><?php esc_html_e('Contribution', 'trifold'); ?></div>
          <div style="font-size: var(--font-size-body); font-weight: 700; color: var(--color-ink);">
            <span class="tag-badge<?php echo $is_concept ? ' concept' : ''; ?>">
              <?php echo esc_html($contribution); ?>
            </span>
          </div>
        </div>
        <div>
          <div style="font-size: var(--font-size-label); text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-stone); margin-bottom: 8px;"><?php esc_html_e('Year / Link', 'trifold'); ?></div>
          <div style="font-size: var(--font-size-body); font-weight: 700; color: var(--color-ink);">
            <?php if ($website_url) : ?>
              <a href="<?php echo esc_url($website_url); ?>" target="_blank" rel="noopener" style="color: var(--color-vermilion);">Visit Site ↗</a>
            <?php else : ?>
              <?php echo esc_html($year); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Desktop Showcase Media -->
  <div class="container">
    <div style="margin: 80px 0; border-radius: 8px; overflow: hidden; border: 1px solid var(--border-light); box-shadow: 0 32px 80px rgba(0, 0, 0, 0.08); background-color: #FFFFFF;">
      <?php if ($desktop_img) : ?>
        <img src="<?php echo esc_url($desktop_img); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: auto;">
      <?php elseif (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', ['style' => 'width: 100%; height: auto;']); ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- Narrative Content (Conditionally Rendered) -->
  <?php if (!empty($challenge) || !empty($approach) || !empty(get_the_content())) : ?>
    <section class="section">
      <div class="container" style="max-width: 920px;">
        <?php if (!empty($challenge)) : ?>
          <span class="kicker"><?php esc_html_e('The Challenge', 'trifold'); ?></span>
          <div style="font-size: var(--font-size-lead); line-height: 1.7; margin-bottom: 48px;">
            <?php echo wp_kses_post($challenge); ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($approach)) : ?>
          <span class="kicker"><?php esc_html_e('The Approach', 'trifold'); ?></span>
          <div style="font-size: var(--font-size-lead); line-height: 1.7; margin-bottom: 48px;">
            <?php echo wp_kses_post($approach); ?>
          </div>
        <?php endif; ?>

        <?php the_content(); ?>
      </div>
    </section>
  <?php endif; ?>

  <!-- Mobile Viewport Showcase (Conditionally Rendered) -->
  <?php if ($mobile_img) : ?>
    <section class="section" style="background-color: var(--color-surface-subtle);">
      <div class="container text-center">
        <span class="kicker"><?php esc_html_e('Responsive Architecture', 'trifold'); ?></span>
        <h2 style="font-size: var(--font-size-h2); margin-bottom: 48px;"><?php esc_html_e('DESIGNED FOR TOUCH & SPEED.', 'trifold'); ?></h2>
        <div style="display: flex; justify-content: center;">
          <div style="max-width: 340px; border-radius: 36px; box-shadow: 0 24px 60px rgba(0, 0, 0, 0.12); overflow: hidden;">
            <img src="<?php echo esc_url($mobile_img); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: auto;">
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- Next Case Study Link -->
  <section class="next-project-banner" style="background-color: var(--color-ink); color: var(--color-ivory); padding: 120px 0; text-align: center;">
    <div class="container">
      <span class="kicker" style="color: var(--color-vermilion);"><?php esc_html_e('Next Case Study', 'trifold'); ?></span>
      <h2 style="font-size: var(--font-size-display); letter-spacing: -0.04em; margin: 16px 0 32px;">
        <a href="<?php echo esc_url(home_url('/work/')); ?>" style="color: var(--color-ivory);"><?php esc_html_e('EXPLORE ALL PROJECTS →', 'trifold'); ?></a>
      </h2>
      <a href="<?php echo esc_url(home_url('/work/')); ?>" class="btn btn-outline" style="border-color: rgba(245, 242, 235, 0.4); color: #FFF;"><?php esc_html_e('Back to all work', 'trifold'); ?></a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
