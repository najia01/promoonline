<?php
if (!function_exists('mytheme_options')) {

    function mytheme_options()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menus(array(
            'main_menu' => __('Main Menu', 'text_domain'),

        ));
    }
    add_action('after_setup_theme', 'mytheme_options', 0);
}

if (!function_exists('custom_post_type')) {
    function custom_post_type()
    {


        register_post_type(
            'stagiaire',
            array(
                'labels'      => array(
                    'name'          => __('Stagiaires', 'textdomain'),
                    'singular_name' => __('Stagiaire', 'textdomain'),

                ),
                'public'      => true,
                'has_archive' => true,
                'menu_position' => 5,
                'menu_icon'   => 'dashicons-groups',
                'show_in_rest' => true,
                'supports'    => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'custom-fields',
                    'comments',
                    'revisions',
                    'author',
                    'page-attributes',
                    'post-formats',
                ),
            )

        );
    }
    add_action('init', 'custom_post_type');
}

if (!function_exists('widget_registration')){
    function widget_registration(){
        register_sidebar(array (
            'name'=> 'Footer 1',
            'id'=> 'footer1',
            'before_widget'=> '<div class="footer-widget">',
            'after_widget'=> '</div>',
            'before_title'=> '<h3 class="footer-title">',
            'after_title'=> '</h3>',
        )
        );
    }
    add_action('widgets_init', 'widget_registration');
}

