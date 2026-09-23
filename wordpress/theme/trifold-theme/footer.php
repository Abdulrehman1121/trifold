<?php
/**
 * Trifold Theme Footer Template
 */

if (!defined('ABSPATH')) {
    exit;
}

$email = get_theme_mod('trifold_email', 'hello@trifold.agency');
$linkedin = get_theme_mod('trifold_linkedin', 'https://linkedin.com/company/trifoldagency');
$instagram = get_theme_mod('trifold_instagram', 'https://instagram.com/trifoldagency');
?>
  <!-- Editorial Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-marquee-row">
        <div class="footer-marquee-text"><?php esc_html_e('Good things unfold.', 'trifold'); ?></div>
      </div>

      <div class="footer-grid">
        <div class="footer-brand-col">
          <svg viewBox="0 0 1080 280" height="24" width="92" aria-label="Trifold Logo">
            <g class="symbol" transform="translate(40 40)">
              <polygon points="0,33 50,0 214,0 90,57" fill="#E4492E"/>
              <polygon points="113,67 214,3 214,58 149,84" fill="#E4492E"/>
              <polygon points="91,64 149,95 149,192 91,158" fill="#E4492E"/>
            </g>
            <g class="word">
              <g class="letter l0"><path d="M788 0Q676 -21 568.5 -18.5Q461 -16 376.5 19.5Q292 55 248 134Q208 208 206.0 284.5Q204 361 204 458V1380H476V474Q476 411 477.5 360.5Q479 310 498 280Q534 223 613.0 218.0Q692 213 788 226ZM20 870V1080H788V870Z" transform="translate(299.600 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
              <g class="letter l1"><path d="M140 0V1080H380V816L354 850Q375 906 410.0 952.0Q445 998 496 1028Q535 1052 581.0 1065.5Q627 1079 676.0 1082.5Q725 1086 774 1080V826Q729 840 669.5 835.5Q610 831 562 808Q514 786 481.0 749.5Q448 713 431.0 663.5Q414 614 414 552V0Z" transform="translate(406.160 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
              <g class="letter l2"><path d="M160 1230V1470H432V1230ZM160 0V1080H432V0Z" transform="translate(505.040 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
              <g class="letter l3"><path d="M230 0V1076Q230 1117 232.0 1169.0Q234 1221 248.5 1274.0Q263 1327 302 1370Q352 1426 410.5 1446.5Q469 1467 524.0 1468.5Q579 1470 618 1470H752V1250H628Q564 1250 533.0 1217.5Q502 1185 502 1140V0ZM60 870V1080H752V870Z" transform="translate(576.080 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
              <g class="letter l4"><path d="M626 -30Q463 -30 340.0 43.0Q217 116 148.5 244.5Q80 373 80 540Q80 709 150.0 837.5Q220 966 343.0 1038.0Q466 1110 626 1110Q789 1110 912.5 1037.0Q1036 964 1105.0 835.5Q1174 707 1174 540Q1174 372 1104.5 243.5Q1035 115 911.5 42.5Q788 -30 626 -30ZM626 224Q757 224 821.5 312.5Q886 401 886 540Q886 684 820.5 770.0Q755 856 626 856Q537 856 480.0 816.0Q423 776 395.5 705.0Q368 634 368 540Q368 395 433.5 309.5Q499 224 626 224Z" transform="translate(668.720 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
              <g class="letter l5"><path d="M160 0V1470H432V0Z" transform="translate(819.200 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
              <g class="letter l6"><path d="M578 -30Q429 -30 317.0 45.0Q205 120 142.5 249.0Q80 378 80 540Q80 705 143.5 833.5Q207 962 322.0 1036.0Q437 1110 592 1110Q746 1110 851.0 1035.0Q956 960 1010.0 831.0Q1064 702 1064 540Q1064 378 1009.5 249.0Q955 120 847.0 45.0Q739 -30 578 -30ZM622 212Q713 212 767.5 253.0Q822 294 846.0 368.0Q870 442 870 540Q870 638 846.0 712.0Q822 786 769.5 827.0Q717 868 632 868Q541 868 482.5 823.5Q424 779 396.0 704.5Q368 630 368 540Q368 449 395.0 374.5Q422 300 478.0 256.0Q534 212 622 212ZM870 0V740H836V1440H1110V0Z" transform="translate(890.240 230) scale(0.12 -0.12)" fill="#F5F2EB"/></g>
            </g>
          </svg>
          <p><?php esc_html_e('Trifold is a creative digital agency connecting brand identity, website design and development, and graphic design.', 'trifold'); ?></p>
        </div>

        <div class="footer-nav-col">
          <h4><?php esc_html_e('Navigation', 'trifold'); ?></h4>
          <ul class="footer-nav-list">
            <li><a href="<?php echo esc_url(home_url('/work/')); ?>"><?php esc_html_e('Work', 'trifold'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'trifold'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About Us', 'trifold'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/insights/')); ?>"><?php esc_html_e('Insights', 'trifold'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact', 'trifold'); ?></a></li>
          </ul>
        </div>

        <div class="footer-nav-col">
          <h4><?php esc_html_e('Services', 'trifold'); ?></h4>
          <ul class="footer-nav-list">
            <li><a href="<?php echo esc_url(home_url('/services/brand-identity/')); ?>"><?php esc_html_e('Brand Identity', 'trifold'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/services/websites/')); ?>"><?php esc_html_e('Websites & WordPress', 'trifold'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/services/graphic-design/')); ?>"><?php esc_html_e('Graphic Design', 'trifold'); ?></a></li>
          </ul>
        </div>

        <div class="footer-nav-col">
          <h4><?php esc_html_e('Connect', 'trifold'); ?></h4>
          <ul class="footer-nav-list">
            <?php if ($email) : ?>
              <li><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></li>
            <?php endif; ?>
            <?php if ($linkedin) : ?>
              <li><a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener"><?php esc_html_e('LinkedIn', 'trifold'); ?></a></li>
            <?php endif; ?>
            <?php if ($instagram) : ?>
              <li><a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener"><?php esc_html_e('Instagram', 'trifold'); ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>

      <div class="footer-bottom-bar">
        <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'trifold'); ?></p>
        <p><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><?php esc_html_e('Privacy Policy', 'trifold'); ?></a> · <?php esc_html_e('Good things unfold.', 'trifold'); ?></p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
