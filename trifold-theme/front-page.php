<?php
/**
 * Trifold Homepage Template
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content">
  <!-- 01. HOMEPAGE HERO (UNFOLDING CEREMONY) -->
  <section class="hero-section" id="hero">
    <div class="hero-backdrop-geometry"></div>
    <div class="hero-backdrop-geometry two"></div>

    <div class="container hero-content">
      <div class="hero-logo-stage">
        <svg class="hero-logo-svg" viewBox="0 0 1080 280" aria-label="Trifold Logo">
          <g class="symbol" transform="translate(40 40)">
            <polygon class="plane p0" points="0,33 50,0 214,0 90,57" fill="#E4492E"/>
            <polygon class="plane p1" points="113,67 214,3 214,58 149,84" fill="#E4492E"/>
            <polygon class="plane p2" points="91,64 149,95 149,192 91,158" fill="#E4492E"/>
          </g>
          <g class="word">
            <g class="letter l0"><path d="M788 0Q676 -21 568.5 -18.5Q461 -16 376.5 19.5Q292 55 248 134Q208 208 206.0 284.5Q204 361 204 458V1380H476V474Q476 411 477.5 360.5Q479 310 498 280Q534 223 613.0 218.0Q692 213 788 226ZM20 870V1080H788V870Z" transform="translate(299.600 230) scale(0.12 -0.12)" fill="#191919"/></g>
            <g class="letter l1"><path d="M140 0V1080H380V816L354 850Q375 906 410.0 952.0Q445 998 496 1028Q535 1052 581.0 1065.5Q627 1079 676.0 1082.5Q725 1086 774 1080V826Q729 840 669.5 835.5Q610 831 562 808Q514 786 481.0 749.5Q448 713 431.0 663.5Q414 614 414 552V0Z" transform="translate(406.160 230) scale(0.12 -0.12)" fill="#191919"/></g>
            <g class="letter l2"><path d="M160 1230V1470H432V1230ZM160 0V1080H432V0Z" transform="translate(505.040 230) scale(0.12 -0.12)" fill="#191919"/></g>
            <g class="letter l3"><path d="M230 0V1076Q230 1117 232.0 1169.0Q234 1221 248.5 1274.0Q263 1327 302 1370Q352 1426 410.5 1446.5Q469 1467 524.0 1468.5Q579 1470 618 1470H752V1250H628Q564 1250 533.0 1217.5Q502 1185 502 1140V0ZM60 870V1080H752V870Z" transform="translate(576.080 230) scale(0.12 -0.12)" fill="#191919"/></g>
            <g class="letter l4"><path d="M626 -30Q463 -30 340.0 43.0Q217 116 148.5 244.5Q80 373 80 540Q80 709 150.0 837.5Q220 966 343.0 1038.0Q466 1110 626 1110Q789 1110 912.5 1037.0Q1036 964 1105.0 835.5Q1174 707 1174 540Q1174 372 1104.5 243.5Q1035 115 911.5 42.5Q788 -30 626 -30ZM626 224Q757 224 821.5 312.5Q886 401 886 540Q886 684 820.5 770.0Q755 856 626 856Q537 856 480.0 816.0Q423 776 395.5 705.0Q368 634 368 540Q368 395 433.5 309.5Q499 224 626 224Z" transform="translate(668.720 230) scale(0.12 -0.12)" fill="#191919"/></g>
            <g class="letter l5"><path d="M160 0V1470H432V0Z" transform="translate(819.200 230) scale(0.12 -0.12)" fill="#191919"/></g>
            <g class="letter l6"><path d="M578 -30Q429 -30 317.0 45.0Q205 120 142.5 249.0Q80 378 80 540Q80 705 143.5 833.5Q207 962 322.0 1036.0Q437 1110 592 1110Q746 1110 851.0 1035.0Q956 960 1010.0 831.0Q1064 702 1064 540Q1064 378 1009.5 249.0Q955 120 847.0 45.0Q739 -30 578 -30ZM622 212Q713 212 767.5 253.0Q822 294 846.0 368.0Q870 442 870 540Q870 638 846.0 712.0Q822 786 769.5 827.0Q717 868 632 868Q541 868 482.5 823.5Q424 779 396.0 704.5Q368 630 368 540Q368 449 395.0 374.5Q422 300 478.0 256.0Q534 212 622 212ZM870 0V740H836V1440H1110V0Z" transform="translate(890.240 230) scale(0.12 -0.12)" fill="#191919"/></g>
          </g>
        </svg>
      </div>

      <p class="hero-eyebrow"><?php esc_html_e('Creative Digital Agency', 'trifold'); ?></p>
      <h1 class="hero-headline">
        Good things <span class="unfold-word">unfold.</span>
      </h1>
      <p class="hero-descriptor"><?php esc_html_e('Branding. Websites. Design.', 'trifold'); ?></p>

      <div class="hero-cta-group">
        <a href="#portfolio" class="btn btn-primary">
          <?php esc_html_e('Explore our work', 'trifold'); ?>
          <svg class="btn-icon-arrow" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline"><?php esc_html_e('Start a project', 'trifold'); ?></a>
      </div>
    </div>

    <div class="hero-scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-line"></div>
    </div>
  </section>

  <!-- 02. OPENING STORY (IDEA -> IDENTITY -> EXPERIENCE -> CONNECTED) -->
  <section class="story-scroll-section" id="story">
    <div class="container">
      <div class="story-pin-container">
        <!-- Travelling 3D Logo Rail -->
        <div class="story-narrative-wrapper">
          <div class="story-timeline-rail">
            <div class="story-rail-line"></div>
            <div class="story-travel-logo-marker" id="story-travel-logo">
              <div class="story-3d-badge">
                <svg viewBox="0 0 294 272" width="44" height="44" class="story-badge-svg" aria-hidden="true">
                  <g transform="translate(40 40)">
                    <polygon class="plane p0" points="0,33 50,0 214,0 90,57" fill="#E4492E"/>
                    <polygon class="plane p1" points="113,67 214,3 214,58 149,84" fill="#E4492E" opacity="0.95"/>
                    <polygon class="plane p2" points="91,64 149,95 149,192 91,158" fill="#E4492E" opacity="0.85"/>
                  </g>
                </svg>
              </div>
              <div class="story-marker-glow"></div>
            </div>
          </div>

          <div class="story-narrative-col">
            <div class="story-step-card active" data-step="1">
              <span class="story-step-num">01 / GENESIS</span>
              <h2 class="story-step-title"><?php esc_html_e('EVERY BUSINESS STARTS WITH AN IDEA.', 'trifold'); ?></h2>
              <p class="story-step-desc"><?php esc_html_e('A vision for how things could work better. But an idea without form remains invisible to customers.', 'trifold'); ?></p>
            </div>
            <div class="story-step-card" data-step="2">
              <span class="story-step-num">02 / FOUNDATION</span>
              <h2 class="story-step-title"><?php esc_html_e('WE GIVE IT AN IDENTITY.', 'trifold'); ?></h2>
              <p class="story-step-desc"><?php esc_html_e('Strategic positioning, a distinct symbol, considered typography and a visual system that makes your business recognized.', 'trifold'); ?></p>
            </div>
            <div class="story-step-card" data-step="3">
              <span class="story-step-num">03 / REALIZATION</span>
              <h2 class="story-step-title"><?php esc_html_e('THEN WE TURN THAT IDENTITY INTO AN EXPERIENCE.', 'trifold'); ?></h2>
              <p class="story-step-desc"><?php esc_html_e('We architect and build websites that carry your brand confidence into every digital touchpoint.', 'trifold'); ?></p>
            </div>
            <div class="story-step-card" data-step="4">
              <span class="story-step-num">04 / CONTINUITY</span>
              <h2 class="story-step-title"><?php esc_html_e('AND KEEP IT CONNECTED EVERYWHERE.', 'trifold'); ?></h2>
              <p class="story-step-desc"><?php esc_html_e('Social assets, collateral, pitch presentations, and campaigns—all moving together as parts of one system.', 'trifold'); ?></p>
            </div>
          </div>
        </div>

        <div class="story-visual-col">
          <div class="story-morph-canvas">
            <svg class="story-svg-box" viewBox="0 0 294 272" aria-hidden="true">
              <g transform="translate(40 40)">
                <polygon class="plane p0" points="0,33 50,0 214,0 90,57" fill="#E4492E"/>
                <polygon class="plane p1" points="113,67 214,3 214,58 149,84" fill="#E4492E" opacity="0.9"/>
                <polygon class="plane p2" points="91,64 149,95 149,192 91,158" fill="#E4492E" opacity="0.8"/>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 03. CINEMATIC PORTFOLIO (~75VW CENTERED + PEEK) -->
  <section class="cinematic-portfolio-section" id="portfolio" data-cursor="drag">
    <div class="container">
      <div class="portfolio-header-row">
        <div>
          <span class="kicker"><?php esc_html_e('Selected Projects', 'trifold'); ?></span>
          <h2 class="cinematic-headline-animated" aria-label="<?php esc_attr_e('WORK THAT CONNECTS THE DOTS.', 'trifold'); ?>">
            <span class="word-wrap"><span class="word-char"><?php esc_html_e('WORK', 'trifold'); ?></span></span>
            <span class="word-wrap"><span class="word-char"><?php esc_html_e('THAT', 'trifold'); ?></span></span>
            <span class="word-wrap"><span class="word-char" style="color: var(--color-vermilion);"><?php esc_html_e('CONNECTS', 'trifold'); ?></span></span>
            <span class="word-wrap"><span class="word-char"><?php esc_html_e('THE', 'trifold'); ?></span></span>
            <span class="word-wrap"><span class="word-char"><?php esc_html_e('DOTS.', 'trifold'); ?></span><span class="pulsing-live-dot" title="Live Continuous Reel"></span></span>
          </h2>
        </div>
        <a href="<?php echo esc_url(home_url('/work/')); ?>" class="btn btn-outline"><?php esc_html_e('View all projects', 'trifold'); ?></a>
      </div>
    </div>

    <div class="carousel-stage-wrapper">
      <div class="carousel-track">
        <?php
        $projects = new WP_Query([
            'post_type'      => 'project',
            'posts_per_page' => 8,
            'meta_key'       => '_trifold_order',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
        ]);

        $url_map = [
            'sumus'         => 'https://www.sumus.co/',
            'star-atlas'    => 'https://staratlas.com/',
            'roberto-coin'  => 'https://robertocoin.com/',
            'joco-cups'     => 'https://jococups.com/',
            'nalgene'       => 'https://nalgene.com/',
            'revert-ai'     => 'https://revert.ai/',
            'smokehaus'     => 'https://smokehaus.com/',
            'pixel-blossom' => 'https://pixelblossom.io/'
        ];

        $idx = 0;
        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                $idx++;
                $slug = get_post_field('post_name', get_the_ID());
                $live_url = get_post_meta(get_the_ID(), '_trifold_live_url', true) ?: ($url_map[$slug] ?? get_permalink());
                $bg_color = get_post_meta(get_the_ID(), '_trifold_bg_color', true) ?: '#F5F2EB';
                $contribution = get_post_meta(get_the_ID(), '_trifold_contribution', true) ?: 'To be confirmed';
                $industry = get_post_meta(get_the_ID(), '_trifold_industry', true);
                $year = get_post_meta(get_the_ID(), '_trifold_year', true) ?: '2026';
                $desktop_img = get_post_meta(get_the_ID(), '_trifold_desktop_image', true);
                $active_cls = ($idx === 1) ? ' active' : '';
                ?>
                <div class="carousel-slide<?php echo esc_attr($active_cls); ?>" data-bg="<?php echo esc_attr($bg_color); ?>">
                  <a href="<?php echo esc_url($live_url); ?>" target="_blank" rel="noopener noreferrer" data-cursor="view" class="slide-media-card" aria-label="<?php the_title_attribute(); ?>">
                    <div class="card-live-pill">Live Site ↗</div>
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('large', ['class' => 'slide-image']); ?>
                    <?php elseif ($desktop_img) : ?>
                      <img src="<?php echo esc_url($desktop_img); ?>" alt="<?php the_title_attribute(); ?>" class="slide-image">
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/sumus-desktop.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="slide-image">
                    <?php endif; ?>
                    <div class="card-3d-glare"></div>
                  </a>
                  <div class="slide-info-row">
                    <div class="slide-meta-left">
                      <h3 class="slide-title"><a href="<?php echo esc_url($live_url); ?>" target="_blank" rel="noopener noreferrer"><?php the_title(); ?> ↗</a></h3>
                      <p class="slide-industry"><?php echo esc_html($industry); ?> · <a href="<?php the_permalink(); ?>" style="color: var(--color-vermilion); font-weight: 600;">Case Study →</a></p>
                    </div>
                    <div class="slide-meta-right">
                      <span class="slide-contribution-tag"><?php echo esc_html($contribution); ?></span>
                      <span style="font-size: 0.85rem; color: #888;"><?php echo esc_html($year); ?></span>
                    </div>
                  </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            // Fallback preview slides if no posts published yet
            ?>
            <div class="carousel-slide active" data-bg="#F0F4F1">
              <a href="<?php echo esc_url(home_url('/work/')); ?>" data-cursor="view" class="slide-media-card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/sumus-desktop.jpg'); ?>" alt="Sumus" class="slide-image">
              </a>
              <div class="slide-info-row">
                <div class="slide-meta-left">
                  <h3 class="slide-title">Sumus</h3>
                  <p class="slide-industry">Sustainability &amp; Impact Strategy</p>
                </div>
                <div class="slide-meta-right">
                  <span class="slide-contribution-tag">Contribution: To be confirmed</span>
                  <span style="font-size: 0.85rem; color: #888;">2026</span>
                </div>
              </div>
            </div>
            <?php
        endif;
        ?>
      </div>
    </div>

    <div class="container">
      <div class="carousel-nav-bar">
        <div class="carousel-counter">01 / <?php echo str_pad($projects->found_posts ?: 1, 2, '0', STR_PAD_LEFT); ?></div>
        <div class="carousel-arrows">
          <button class="carousel-arrow-btn carousel-prev" aria-label="<?php esc_attr_e('Previous Project', 'trifold'); ?>">←</button>
          <button class="carousel-arrow-btn carousel-next" aria-label="<?php esc_attr_e('Next Project', 'trifold'); ?>">→</button>
        </div>
      </div>
    </div>
  </section>

  <!-- 04. SERVICES SECTION -->
  <section class="services-section" id="services">
    <div class="container">
      <span class="kicker"><?php esc_html_e('Three Connected Pillars', 'trifold'); ?></span>
      <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('WHAT WE DO.', 'trifold'); ?></h2>
      <p style="font-size: var(--font-size-lead); max-width: 680px; margin-top: 16px;">
        <?php esc_html_e('Branding. Websites. Design. We unite identity, engineering, and visual communication under one cohesive discipline.', 'trifold'); ?>
      </p>

      <div class="service-accordion-group">
        <!-- 01 Brand Identity -->
        <div class="service-row-item open">
          <div class="service-row-header">
            <div class="service-row-left">
              <span class="service-row-num">01</span>
              <h3 class="service-row-title"><?php esc_html_e('Brand Identity', 'trifold'); ?></h3>
            </div>
            <div class="service-row-toggle">+</div>
          </div>
          <div class="service-row-body">
            <div class="service-row-body-inner">
              <div>
                <p class="service-row-desc"><?php esc_html_e('We uncover what makes your business distinct and shape it into a memorable visual identity.', 'trifold'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/brand-identity/')); ?>" class="btn btn-outline" style="margin-top: 32px;"><?php esc_html_e('Explore Brand Identity', 'trifold'); ?></a>
              </div>
              <div class="subservice-icon-grid">
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-strategy.svg'); ?>" alt=""> Brand Strategy</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-brand-identity.svg'); ?>" alt=""> Visual Identity</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-logo-design.svg'); ?>" alt=""> Logo Design</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-color-systems.svg'); ?>" alt=""> Colour Systems</div>
              </div>
            </div>
          </div>
        </div>

        <!-- 02 Websites -->
        <div class="service-row-item">
          <div class="service-row-header">
            <div class="service-row-left">
              <span class="service-row-num">02</span>
              <h3 class="service-row-title"><?php esc_html_e('Websites', 'trifold'); ?></h3>
            </div>
            <div class="service-row-toggle">+</div>
          </div>
          <div class="service-row-body">
            <div class="service-row-body-inner">
              <div>
                <p class="service-row-desc"><?php esc_html_e('A website should not be a collection of disconnected pages. We design and develop bespoke digital experiences.', 'trifold'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/websites/')); ?>" class="btn btn-outline" style="margin-top: 32px;"><?php esc_html_e('Explore Website Services', 'trifold'); ?></a>
              </div>
              <div class="subservice-icon-grid">
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-web-strategy.svg'); ?>" alt=""> Website Strategy</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ux-design.svg'); ?>" alt=""> UX Architecture</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-wordpress.svg'); ?>" alt=""> WordPress Development</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-ecommerce.svg'); ?>" alt=""> Modern Ecommerce</div>
              </div>
            </div>
          </div>
        </div>

        <!-- 03 Graphic Design -->
        <div class="service-row-item">
          <div class="service-row-header">
            <div class="service-row-left">
              <span class="service-row-num">03</span>
              <h3 class="service-row-title"><?php esc_html_e('Graphic Design', 'trifold'); ?></h3>
            </div>
            <div class="service-row-toggle">+</div>
          </div>
          <div class="service-row-body">
            <div class="service-row-body-inner">
              <div>
                <p class="service-row-desc"><?php esc_html_e('From pitch presentations and social content to company profiles and print collateral, we create the everyday visual assets your business needs.', 'trifold'); ?></p>
                <a href="<?php echo esc_url(home_url('/services/graphic-design/')); ?>" class="btn btn-outline" style="margin-top: 32px;"><?php esc_html_e('Explore Graphic Design', 'trifold'); ?></a>
              </div>
              <div class="subservice-icon-grid">
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-social-media.svg'); ?>" alt=""> Social Media Content</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-campaign-design.svg'); ?>" alt=""> Campaign Creative</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-presentation.svg'); ?>" alt=""> Presentations</div>
                <div class="subservice-pill"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/icon-company-profile.svg'); ?>" alt=""> Company Profiles</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 05. BRAND PHILOSOPHY -->
  <section class="philosophy-section" id="philosophy">
    <div class="container philosophy-manifesto-box">
      <span class="kicker"><?php esc_html_e('Studio Philosophy', 'trifold'); ?></span>
      <div style="margin-top: 32px;">
        <h2 class="manifesto-line-large"><?php esc_html_e('A LOGO IS NOT A BRAND.', 'trifold'); ?></h2>
        <h2 class="manifesto-line-large"><?php esc_html_e('A WEBSITE IS NOT JUST A COLLECTION OF PAGES.', 'trifold'); ?></h2>
        <h2 class="manifesto-line-large text-vermilion"><?php esc_html_e('EVERYTHING SHOULD FEEL CONNECTED.', 'trifold'); ?></h2>
      </div>
      <div class="manifesto-conclusion">
        <div class="manifesto-pillar-card">
          <h4 class="manifesto-pillar-title">ONE IDEA.</h4>
          <p class="manifesto-pillar-text">Clear strategic intent behind every decision.</p>
        </div>
        <div class="manifesto-pillar-card">
          <h4 class="manifesto-pillar-title">ONE IDENTITY.</h4>
          <p class="manifesto-pillar-text">Unmistakable visual grammar and typography.</p>
        </div>
        <div class="manifesto-pillar-card">
          <h4 class="manifesto-pillar-title">ONE EXPERIENCE.</h4>
          <p class="manifesto-pillar-text">Frictionless digital navigation and interaction.</p>
        </div>
        <div class="manifesto-pillar-card">
          <h4 class="manifesto-pillar-title">EVERYWHERE.</h4>
          <p class="manifesto-pillar-text">Consistent touchpoints wherever you show up.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 06. PROCESS -->
  <section class="process-section" id="process">
    <div class="container">
      <span class="kicker"><?php esc_html_e('How We Work', 'trifold'); ?></span>
      <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('FROM THE FIRST IDEA TO THE FINAL DETAIL.', 'trifold'); ?></h2>
      <div class="process-grid">
        <div class="process-card">
          <span class="process-num">01</span>
          <h3 class="process-title">Discover</h3>
          <p class="process-desc">We examine your business landscape, customer audience, and commercial goals.</p>
        </div>
        <div class="process-card">
          <span class="process-num">02</span>
          <h3 class="process-title">Define</h3>
          <p class="process-desc">We agree on strategic direction, content hierarchy, and foundational visual benchmarks.</p>
        </div>
        <div class="process-card">
          <span class="process-num">03</span>
          <h3 class="process-title">Design</h3>
          <p class="process-desc">We shape high-fidelity prototypes, brand identity systems, and typography with review rounds.</p>
        </div>
        <div class="process-card">
          <span class="process-num">04</span>
          <h3 class="process-title">Build</h3>
          <p class="process-desc">We engineer performant, responsive WordPress themes and custom Gutenberg/Elementor controls.</p>
        </div>
        <div class="process-card">
          <span class="process-num">05</span>
          <h3 class="process-title">Refine</h3>
          <p class="process-desc">Rigorous cross-browser testing, accessibility audit, Core Web Vitals profiling, and CMS editor testing.</p>
        </div>
        <div class="process-card">
          <span class="process-num">06</span>
          <h3 class="process-title">Launch</h3>
          <p class="process-desc">Seamless deployment, complete admin handover training, and documentation so you have full control.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 07. CONCEPT DESIGN WALL -->
  <section class="graphic-wall-section" id="concepts">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end;">
        <div>
          <span class="kicker"><?php esc_html_e('Exploratory Studio', 'trifold'); ?></span>
          <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('GRAPHIC DESIGN & BRAND SYSTEMS.', 'trifold'); ?></h2>
        </div>
        <span class="tag-badge concept" style="align-self: flex-end;"><?php esc_html_e('Concept Projects', 'trifold'); ?></span>
      </div>

      <div class="graphic-wall-grid">
        <div class="graphic-wall-card">
          <a href="<?php echo esc_url(home_url('/project/concept-atelier-kanso/')); ?>" data-cursor="view">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/concept-atelier-kanso.jpg'); ?>" alt="Atelier Kanso" class="graphic-poster-img">
          </a>
          <div class="graphic-card-body">
            <div>
              <h3 style="font-size: 1.4rem; font-weight: 800; color: #191919;">Atelier Kanso</h3>
              <p style="font-size: 0.9rem; color: #666;">Architecture &amp; Spatial Design Studio</p>
            </div>
            <span class="tag-badge concept">CONCEPT PROJECT</span>
          </div>
        </div>

        <div class="graphic-wall-card">
          <a href="<?php echo esc_url(home_url('/project/concept-kohi-roasters/')); ?>" data-cursor="view">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/portfolio/concept-kohi-roasters.jpg'); ?>" alt="Kohi Craft Roasters" class="graphic-poster-img">
          </a>
          <div class="graphic-card-body">
            <div>
              <h3 style="font-size: 1.4rem; font-weight: 800; color: #191919;">Kōhī Craft Roasters</h3>
              <p style="font-size: 0.9rem; color: #666;">Specialty Coffee Packaging</p>
            </div>
            <span class="tag-badge concept">CONCEPT PROJECT</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 08. ABOUT TRIFOLD -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="about-content-row">
        <div>
          <span class="kicker"><?php esc_html_e('About Trifold', 'trifold'); ?></span>
          <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em; margin-bottom: 24px;">
            <?php esc_html_e('BUILT FOR BUSINESSES THAT WANT EVERYTHING TO FEEL CONNECTED.', 'trifold'); ?>
          </h2>
          <p class="about-editorial-text">
            Trifold was founded by <strong>Farhan Khan</strong>, <strong>Shayan Mutahir</strong> and <strong>Abdul Rehman Kaleem</strong> to bring creative thinking and practical execution closer together.
          </p>
          <p class="about-editorial-text">
            We shape brand identities, design and develop websites, and create the graphics businesses need to communicate with confidence. From the first idea to the final detail, we help your brand feel connected.
          </p>
          <div class="founders-attribution-box">
            <p class="founders-names">Farhan Khan · Shayan Mutahir · Abdul Rehman Kaleem</p>
            <p style="font-size: 0.875rem; color: #666;">Co-Founders &amp; Creative Directors · Trifold Agency</p>
          </div>
        </div>
        <div class="about-visual-box">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Trifold_Brand_Board.png'); ?>" alt="Trifold Brand Board">
        </div>
      </div>
    </div>
  </section>

  <!-- 09. INSIGHTS -->
  <section class="insights-section" id="insights">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end;">
        <div>
          <span class="kicker"><?php esc_html_e('Studio Journal', 'trifold'); ?></span>
          <h2 style="font-size: var(--font-size-h1); letter-spacing: -0.03em;"><?php esc_html_e('PRACTICAL THINKING ON DESIGN & CODE.', 'trifold'); ?></h2>
        </div>
        <a href="<?php echo esc_url(home_url('/insights/')); ?>" class="btn btn-outline"><?php esc_html_e('Read all articles', 'trifold'); ?></a>
      </div>

      <div class="insights-grid">
        <?php
        $insights = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]);
        if ($insights->have_posts()) :
            while ($insights->have_posts()) : $insights->the_post();
                ?>
                <article class="insight-card">
                  <span class="insight-meta"><?php echo esc_html(get_the_date('M Y')); ?></span>
                  <h3 class="insight-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p class="insight-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                  <a href="<?php the_permalink(); ?>" style="font-size: 0.9rem; font-weight: 700; color: #191919;">Read Article →</a>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <article class="insight-card">
              <span class="insight-meta">Brand Strategy · 5 Min Read</span>
              <h3 class="insight-title"><a href="<?php echo esc_url(home_url('/insights/')); ?>">Why your website and brand identity should be designed together</a></h3>
              <p class="insight-excerpt">Treating branding and web development as separate handoffs creates fractured customer journeys.</p>
              <a href="<?php echo esc_url(home_url('/insights/')); ?>" style="font-size: 0.9rem; font-weight: 700; color: #191919;">Read Article →</a>
            </article>
            <article class="insight-card">
              <span class="insight-meta">Web Engineering · 4 Min Read</span>
              <h3 class="insight-title"><a href="<?php echo esc_url(home_url('/insights/')); ?>">Building lightweight WordPress architectures without third-party bloat</a></h3>
              <p class="insight-excerpt">How custom Gutenberg blocks and clean theme engineering deliver sub-second page loads.</p>
              <a href="<?php echo esc_url(home_url('/insights/')); ?>" style="font-size: 0.9rem; font-weight: 700; color: #191919;">Read Article →</a>
            </article>
            <article class="insight-card">
              <span class="insight-meta">Graphic Design · 6 Min Read</span>
              <h3 class="insight-title"><a href="<?php echo esc_url(home_url('/insights/')); ?>">Design systems that survive the transition from Figma to everyday business</a></h3>
              <p class="insight-excerpt">How to structure typography and templates so your team actually adheres to them.</p>
              <a href="<?php echo esc_url(home_url('/insights/')); ?>" style="font-size: 0.9rem; font-weight: 700; color: #191919;">Read Article →</a>
            </article>
            <?php
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- 10. CLOSING CALL-TO-ACTION (LET'S UNFOLD IT) -->
  <section class="cta-section" id="contact-cta">
    <div class="cta-ambient-glow"></div>
    <div class="container cta-container-inner">
      <span class="kicker kicker-animated"><span class="kicker-line"></span><?php esc_html_e('Ready to begin?', 'trifold'); ?></span>
      <h2 class="cta-crescendo-title cta-animated-title" aria-label="<?php esc_attr_e('HAVE SOMETHING IN MIND? LET\'S UNFOLD IT.', 'trifold'); ?>">
        <span class="cta-line">
          <span class="cta-word-wrap"><span class="cta-word-char"><?php esc_html_e('HAVE', 'trifold'); ?></span></span>
          <span class="cta-word-wrap"><span class="cta-word-char"><?php esc_html_e('SOMETHING', 'trifold'); ?></span></span>
          <span class="cta-word-wrap"><span class="cta-word-char"><?php esc_html_e('IN', 'trifold'); ?></span></span>
        </span>
        <span class="cta-line">
          <span class="cta-word-wrap"><span class="cta-word-char"><?php esc_html_e('MIND?', 'trifold'); ?></span></span>
        </span>
        <span class="cta-line cta-line-accent">
          <span class="cta-word-wrap"><span class="cta-word-char"><?php esc_html_e('LET\'S', 'trifold'); ?></span></span>
          <span class="cta-word-wrap"><span class="cta-word-char unfold-highlight"><?php esc_html_e('UNFOLD', 'trifold'); ?></span></span>
          <span class="cta-word-wrap"><span class="cta-word-char unfold-highlight"><?php esc_html_e('IT.', 'trifold'); ?></span><span class="pulsing-live-dot cta-dot"></span></span>
        </span>
      </h2>
      <p class="cta-subline cta-animated-subline">
        <?php esc_html_e('Whether you need a complete brand identity, a considered website, or ongoing design support, we help every touchpoint feel part of the same business.', 'trifold'); ?>
      </p>
      <div class="cta-btn-wrapper">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-vermilion cta-pulse-btn" style="font-size: 1.15rem; padding: 20px 48px;">
          <?php esc_html_e('Start a project with us', 'trifold'); ?>
          <svg class="btn-icon-arrow" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
