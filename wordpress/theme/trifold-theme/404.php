<?php
/**
 * 404 Error Page Template
 *
 * @package Trifold
 */

get_header();
?>

<main id="primary" class="site-main" style="flex: 1; display: flex; align-items: center; justify-content: center; text-align: center; padding: 160px 20px 100px;">
  <div class="container" style="max-width: 680px;">
    <div style="width: 80px; height: 80px; margin: 0 auto 32px;">
      <svg viewBox="0 0 294 272" aria-hidden="true">
        <g transform="translate(40 40)">
          <polygon points="0,33 50,0 214,0 90,57" fill="#E4492E" opacity="0.4"/>
          <polygon points="113,67 214,3 214,58 149,84" fill="#E4492E" opacity="0.7"/>
          <polygon points="91,64 149,95 149,192 91,158" fill="#E4492E"/>
        </g>
      </svg>
    </div>
    <h1 style="font-size: clamp(3rem, 7vw, 6rem); line-height: 1; margin-bottom: 20px;">404</h1>
    <h2 style="font-size: 1.8rem; margin-bottom: 16px;"><?php esc_html_e( 'THIS PAGE CANNOT BE UNFOLDED.', 'trifold' ); ?></h2>
    <p style="font-size: 1.1rem; color: #666; margin-bottom: 40px;">
      <?php esc_html_e( 'The link you followed may be broken or the page has moved to another location.', 'trifold' ); ?>
    </p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Return to Homepage', 'trifold' ); ?></a>
  </div>
</main>

<?php
get_footer();
