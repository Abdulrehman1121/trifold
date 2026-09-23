<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Trifold_Symbol_Transparent.svg'); ?>">
  <?php if (!defined('WPSEO_VERSION') && !defined('RANK_MATH_VERSION') && !defined('SEOPRESS_VERSION') && !defined('AIOSEO_VERSION')) : ?>
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description') ?: 'Creative digital agency connecting brand identity, website design and development, and graphic design.'); ?>">
    <meta property="og:title" content="<?php echo esc_attr(wp_get_document_title()); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo esc_url(is_singular() ? get_permalink() : home_url('/')); ?>">
    <meta name="twitter:card" content="summary_large_image">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Header -->
  <header class="site-header" id="site-header">
    <div class="container header-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" aria-label="<?php bloginfo('name'); ?>">
        <svg viewBox="0 0 1080 280" height="28" width="108" aria-hidden="true">
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
      </a>

      <nav class="primary-nav" aria-label="<?php esc_attr_e('Main Navigation', 'trifold'); ?>">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'fallback_cb'    => false,
            ]);
        } else {
            ?>
            <ul class="nav-links">
              <li><a href="<?php echo esc_url(home_url('/work/')); ?>" class="nav-link"><?php esc_html_e('Work', 'trifold'); ?></a></li>
              <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="nav-link"><?php esc_html_e('Services', 'trifold'); ?></a></li>
              <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link"><?php esc_html_e('About', 'trifold'); ?></a></li>
              <li><a href="<?php echo esc_url(home_url('/insights/')); ?>" class="nav-link"><?php esc_html_e('Insights', 'trifold'); ?></a></li>
              <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link"><?php esc_html_e('Contact', 'trifold'); ?></a></li>
            </ul>
            <?php
        }
        ?>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="header-cta"><?php esc_html_e('Start a project', 'trifold'); ?></a>
      </nav>

      <button class="menu-toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'trifold'); ?>" aria-expanded="false">
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Fullscreen Navigation Overlay -->
  <div class="fullscreen-menu" id="fullscreen-menu" aria-hidden="true">
    <div class="container">
      <ul class="fullscreen-menu-links">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="fullscreen-menu-link"><span class="link-num">01</span> <?php esc_html_e('Home', 'trifold'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/work/')); ?>" class="fullscreen-menu-link"><span class="link-num">02</span> <?php esc_html_e('Work', 'trifold'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="fullscreen-menu-link"><span class="link-num">03</span> <?php esc_html_e('Services', 'trifold'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="fullscreen-menu-link"><span class="link-num">04</span> <?php esc_html_e('About', 'trifold'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/insights/')); ?>" class="fullscreen-menu-link"><span class="link-num">05</span> <?php esc_html_e('Insights', 'trifold'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="fullscreen-menu-link"><span class="link-num">06</span> <?php esc_html_e('Contact', 'trifold'); ?></a></li>
      </ul>
      <div class="fullscreen-menu-footer">
        <p style="color: rgba(245, 242, 235, 0.6); font-size: 0.875rem;">trifold.agency · Branding. Websites. Design.</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-vermilion"><?php esc_html_e('Start a project', 'trifold'); ?></a>
      </div>
    </div>
  </div>
