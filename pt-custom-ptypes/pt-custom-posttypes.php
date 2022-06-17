<?php
/**
 * Plugin Name: PT Custom Post Types
 */

function custom_post_type_in_plugin()
{
    register_post_type(
        'Testimonial',
        array(
            'labels'  => array(
                'name'    => 'Testimonial',

            ),
            'rewrite' => array(
                'slug' => 'testimonial',
                'pages' => true,
                'feeds' => true,

            ),
            'public'      => true,
            'has_archive' => true,
        )
    );
    register_post_type(
        'Events',
        array(
            'labels'  => array(
                'name'    => 'Events',

            ),
            'rewrite' => array(
                'slug' => 'events',
                'pages' => true,
                'feeds' => true,

            ),
            'public'      => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'custom_post_type_in_plugin');