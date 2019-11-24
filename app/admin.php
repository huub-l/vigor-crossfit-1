<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Remove editor from certain posts
 */
add_action('admin_head', __NAMESPACE__ . '\hide_editor');
function hide_editor() 
{
    global $post;

    if( $post && is_admin() ) {
        $ids = ['18'];

        foreach($ids as $id) {
            if( $post->ID == $id) {
                remove_post_type_support($post->post_type, 'editor');
                break;
            }
        }
    }

    return;
}