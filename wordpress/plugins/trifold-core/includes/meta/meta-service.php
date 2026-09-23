<?php
/**
 * Custom Meta Boxes for 'service' CPT
 */

if (!defined('ABSPATH')) {
    exit;
}

function trifold_add_service_meta_boxes() {
    add_meta_box(
        'trifold_service_settings',
        __('Service Settings & Sub-services', 'trifold-core'),
        'trifold_render_service_meta_box',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'trifold_add_service_meta_boxes');

function trifold_render_service_meta_box($post) {
    wp_nonce_field('trifold_save_service_meta', 'trifold_service_nonce');

    $order = get_post_meta($post->ID, '_trifold_service_order', true);
    $svg_icon = get_post_meta($post->ID, '_trifold_service_icon', true);
    $subservices = get_post_meta($post->ID, '_trifold_subservices', true);
    ?>
    <div style="margin-bottom: 16px;">
      <label style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('Pillar Number / Order (e.g. 01, 02, 03)', 'trifold-core'); ?></label>
      <input type="text" name="trifold_service_order" value="<?php echo esc_attr($order); ?>" style="width: 100px;">
    </div>
    <div style="margin-bottom: 16px;">
      <label style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('Bespoke Trifold SVG Icon Identifier / Path', 'trifold-core'); ?></label>
      <input type="text" name="trifold_service_icon" value="<?php echo esc_attr($svg_icon); ?>" style="width: 100%;" placeholder="assets/icons/icon-brand-identity.svg">
    </div>
    <div style="margin-bottom: 16px;">
      <label style="display:block; font-weight:600; margin-bottom:6px;"><?php _e('Sub-Services (One per line)', 'trifold-core'); ?></label>
      <textarea name="trifold_subservices" rows="5" style="width: 100%;"><?php echo esc_textarea($subservices); ?></textarea>
    </div>
    <?php
}

function trifold_save_service_meta($post_id) {
    if (!isset($_POST['trifold_service_nonce']) || !wp_verify_nonce($_POST['trifold_service_nonce'], 'trifold_save_service_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['trifold_service_order'])) {
        update_post_meta($post_id, '_trifold_service_order', sanitize_text_field($_POST['trifold_service_order']));
    }
    if (isset($_POST['trifold_service_icon'])) {
        update_post_meta($post_id, '_trifold_service_icon', sanitize_text_field($_POST['trifold_service_icon']));
    }
    if (isset($_POST['trifold_subservices'])) {
        update_post_meta($post_id, '_trifold_subservices', sanitize_textarea_field($_POST['trifold_subservices']));
    }
}
add_action('save_post_service', 'trifold_save_service_meta');
