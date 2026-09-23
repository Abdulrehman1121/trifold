<?php
/**
 * Custom Meta Boxes & Admin Fields for 'project' CPT
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_add_project_meta_boxes() {
    add_meta_box(
        'trifold_project_details',
        __('Trifold Project Specifications & Attribution', 'trifold-core'),
        'trifold_render_project_meta_box',
        'project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'trifold_add_project_meta_boxes');

function trifold_render_project_meta_box($post) {
    wp_nonce_field('trifold_save_project_meta', 'trifold_project_nonce');

    // Retrieve saved values
    $client = get_post_meta($post->ID, '_trifold_client', true);
    $industry = get_post_meta($post->ID, '_trifold_industry', true);
    $country = get_post_meta($post->ID, '_trifold_country', true);
    $year = get_post_meta($post->ID, '_trifold_year', true);
    $website_url = get_post_meta($post->ID, '_trifold_website_url', true);
    $short_desc = get_post_meta($post->ID, '_trifold_short_desc', true);
    $challenge = get_post_meta($post->ID, '_trifold_challenge', true);
    $approach = get_post_meta($post->ID, '_trifold_approach', true);
    $role = get_post_meta($post->ID, '_trifold_role', true);
    $contribution = get_post_meta($post->ID, '_trifold_contribution', true);
    if (empty($contribution)) {
        $contribution = 'To be confirmed'; // Default strictly per requirement
    }

    $tech_list = get_post_meta($post->ID, '_trifold_technology_list', true);
    $desktop_img = get_post_meta($post->ID, '_trifold_desktop_image', true);
    $mobile_img = get_post_meta($post->ID, '_trifold_mobile_image', true);
    $video_url = get_post_meta($post->ID, '_trifold_video_url', true);

    $primary_color = get_post_meta($post->ID, '_trifold_primary_color', true);
    $bg_color = get_post_meta($post->ID, '_trifold_bg_color', true);
    $text_color = get_post_meta($post->ID, '_trifold_text_color', true);

    $featured = get_post_meta($post->ID, '_trifold_featured', true);
    $order = get_post_meta($post->ID, '_trifold_order', true);
    $case_study_visibility = get_post_meta($post->ID, '_trifold_case_study_visibility', true);
    $external_button = get_post_meta($post->ID, '_trifold_external_button', true);
    $credits = get_post_meta($post->ID, '_trifold_credits', true);
    ?>
    <style>
      .trifold-meta-row { display: flex; gap: 20px; margin-bottom: 18px; }
      .trifold-meta-col { flex: 1; }
      .trifold-meta-col label { display: block; font-weight: 600; margin-bottom: 6px; font-size: 13px; }
      .trifold-meta-col input[type="text"],
      .trifold-meta-col input[type="url"],
      .trifold-meta-col select,
      .trifold-meta-col textarea { width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #CCD0D4; }
      .trifold-notice-box { background: #FFF8E5; border-left: 4px solid #FFA000; padding: 12px 16px; margin-bottom: 20px; font-size: 13px; }
    </style>

    <div class="trifold-notice-box">
      <strong>Important Attribution Policy:</strong> Do not guess Trifold's contribution. Default is set to <em>"To be confirmed"</em>. Only select specific claims once explicitly approved.
    </div>

    <!-- Row 1: Contribution & Client -->
    <div class="trifold-meta-row">
      <div class="trifold-meta-col">
        <label for="trifold_contribution"><?php _e('Trifold Contribution (Mandatory)', 'trifold-core'); ?></label>
        <select name="trifold_contribution" id="trifold_contribution">
          <?php
          $options = [
              'To be confirmed',
              'Designed by Trifold',
              'Developed by Trifold',
              'Brand Identity by Trifold',
              'Design + Development',
              'Development only',
              'Design only',
              'Concept Project',
              'Other'
          ];
          foreach ($options as $opt) {
              printf('<option value="%s"%s>%s</option>', esc_attr($opt), selected($contribution, $opt, false), esc_html($opt));
          }
          ?>
        </select>
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_client"><?php _e('Client Name', 'trifold-core'); ?></label>
        <input type="text" name="trifold_client" id="trifold_client" value="<?php echo esc_attr($client); ?>" placeholder="e.g. Sumus">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_year"><?php _e('Year', 'trifold-core'); ?></label>
        <input type="text" name="trifold_year" id="trifold_year" value="<?php echo esc_attr($year ?: '2026'); ?>">
      </div>
    </div>

    <!-- Row 2: Industry, Country, Live URL -->
    <div class="trifold-meta-row">
      <div class="trifold-meta-col">
        <label for="trifold_industry"><?php _e('Industry Sector', 'trifold-core'); ?></label>
        <input type="text" name="trifold_industry" id="trifold_industry" value="<?php echo esc_attr($industry); ?>" placeholder="e.g. Sustainability & Impact">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_country"><?php _e('Country / Location', 'trifold-core'); ?></label>
        <input type="text" name="trifold_country" id="trifold_country" value="<?php echo esc_attr($country); ?>" placeholder="e.g. Switzerland">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_website_url"><?php _e('Live Project URL', 'trifold-core'); ?></label>
        <input type="url" name="trifold_website_url" id="trifold_website_url" value="<?php echo esc_attr($website_url); ?>" placeholder="https://example.com">
      </div>
    </div>

    <!-- Row 3: Colors & Order -->
    <div class="trifold-meta-row">
      <div class="trifold-meta-col">
        <label for="trifold_primary_color"><?php _e('Primary Brand Accent Color', 'trifold-core'); ?></label>
        <input type="text" name="trifold_primary_color" id="trifold_primary_color" value="<?php echo esc_attr($primary_color ?: '#E4492E'); ?>">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_bg_color"><?php _e('Project Background Color', 'trifold-core'); ?></label>
        <input type="text" name="trifold_bg_color" id="trifold_bg_color" value="<?php echo esc_attr($bg_color ?: '#F5F2EB'); ?>">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_order"><?php _e('Portfolio Sort Order (Numeric)', 'trifold-core'); ?></label>
        <input type="text" name="trifold_order" id="trifold_order" value="<?php echo esc_attr($order ?: '0'); ?>">
      </div>
    </div>

    <!-- Row 4: Images & Media -->
    <div class="trifold-meta-row">
      <div class="trifold-meta-col">
        <label for="trifold_desktop_image"><?php _e('Desktop Screenshot URL / Path', 'trifold-core'); ?></label>
        <input type="text" name="trifold_desktop_image" id="trifold_desktop_image" value="<?php echo esc_attr($desktop_img); ?>" placeholder="assets/portfolio/sumus-desktop.svg">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_mobile_image"><?php _e('Mobile Screenshot URL / Path', 'trifold-core'); ?></label>
        <input type="text" name="trifold_mobile_image" id="trifold_mobile_image" value="<?php echo esc_attr($mobile_img); ?>" placeholder="assets/portfolio/sumus-mobile.svg">
      </div>

      <div class="trifold-meta-col">
        <label for="trifold_video_url"><?php _e('Video URL (Optional MP4)', 'trifold-core'); ?></label>
        <input type="url" name="trifold_video_url" id="trifold_video_url" value="<?php echo esc_attr($video_url); ?>">
      </div>
    </div>

    <!-- Row 5: Toggles -->
    <div class="trifold-meta-row" style="align-items: center;">
      <div class="trifold-meta-col">
        <label>
          <input type="checkbox" name="trifold_featured" value="1" <?php checked($featured, '1'); ?>>
          <?php _e('Featured Project (Showcase in Homepage Cinematic Carousel)', 'trifold-core'); ?>
        </label>
      </div>

      <div class="trifold-meta-col">
        <label>
          <input type="checkbox" name="trifold_case_study_visibility" value="1" <?php checked($case_study_visibility !== '0'); ?>>
          <?php _e('Case Study Visible (Enable Deep-Dive Case Study Page)', 'trifold-core'); ?>
        </label>
      </div>

      <div class="trifold-meta-col">
        <label>
          <input type="checkbox" name="trifold_external_button" value="1" <?php checked($external_button, '1'); ?>>
          <?php _e('Display Live Site External Button', 'trifold-core'); ?>
        </label>
      </div>
    </div>

    <!-- Row 6: Short Description -->
    <div style="margin-bottom: 18px;">
      <label for="trifold_short_desc" style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('Short Portfolio Summary', 'trifold-core'); ?></label>
      <textarea name="trifold_short_desc" id="trifold_short_desc" rows="3"><?php echo esc_textarea($short_desc); ?></textarea>
    </div>

    <!-- Row 7: Challenge & Approach (Wysiwyg) -->
    <div style="margin-bottom: 18px;">
      <label style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('The Challenge (Leave empty if unknown; will conditionally hide)', 'trifold-core'); ?></label>
      <?php wp_editor($challenge, 'trifold_challenge', ['textarea_rows' => 4, 'media_buttons' => false]); ?>
    </div>

    <div style="margin-bottom: 18px;">
      <label style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('The Approach (Leave empty if unknown; will conditionally hide)', 'trifold-core'); ?></label>
      <?php wp_editor($approach, 'trifold_approach', ['textarea_rows' => 4, 'media_buttons' => false]); ?>
    </div>

    <div style="margin-bottom: 18px;">
      <label for="trifold_credits" style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('Project Credits', 'trifold-core'); ?></label>
      <textarea name="trifold_credits" id="trifold_credits" rows="2"><?php echo esc_textarea($credits); ?></textarea>
    </div>
    <?php
}

function trifold_save_project_meta($post_id) {
    if (!isset($_POST['trifold_project_nonce']) || !wp_verify_nonce($_POST['trifold_project_nonce'], 'trifold_save_project_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = [
        'trifold_client' => 'sanitize_text_field',
        'trifold_industry' => 'sanitize_text_field',
        'trifold_country' => 'sanitize_text_field',
        'trifold_year' => 'sanitize_text_field',
        'trifold_website_url' => 'esc_url_raw',
        'trifold_short_desc' => 'sanitize_textarea_field',
        'trifold_challenge' => 'wp_kses_post',
        'trifold_approach' => 'wp_kses_post',
        'trifold_role' => 'sanitize_text_field',
        'trifold_contribution' => 'sanitize_text_field',
        'trifold_technology_list' => 'sanitize_text_field',
        'trifold_desktop_image' => 'sanitize_text_field',
        'trifold_mobile_image' => 'sanitize_text_field',
        'trifold_video_url' => 'esc_url_raw',
        'trifold_primary_color' => 'sanitize_hex_color',
        'trifold_bg_color' => 'sanitize_hex_color',
        'trifold_text_color' => 'sanitize_hex_color',
        'trifold_order' => 'intval',
        'trifold_credits' => 'sanitize_textarea_field',
    ];

    foreach ($fields as $field => $sanitizer) {
        if (isset($_POST[$field])) {
            $val = call_user_func($sanitizer, $_POST[$field]);
            update_post_meta($post_id, '_' . $field, $val);
        }
    }

    $toggles = ['trifold_featured', 'trifold_case_study_visibility', 'trifold_external_button'];
    foreach ($toggles as $tog) {
        $val = isset($_POST[$tog]) ? '1' : '0';
        update_post_meta($post_id, '_' . $tog, $val);
    }
}
add_action('save_post_project', 'trifold_save_project_meta');
