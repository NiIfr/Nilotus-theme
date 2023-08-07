<?php
function add_theme_scripts()
{
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), false, 'all');

    wp_enqueue_style('category', get_template_directory_uri() . '/assets/files/category/category.css', array(), false, 'all');

    wp_enqueue_style('comment', get_template_directory_uri() . '/assets/files/comments/comment.css', array(), false, 'all');
    wp_enqueue_style('index', get_template_directory_uri() . '/assets/files/index/index.css', array(), false, 'all');
    wp_enqueue_style('login', get_template_directory_uri() . '/assets/files/login/login.css', array(), false, 'all');
    wp_enqueue_style('my-account', get_template_directory_uri() . '/assets/files/my-account/my-account.css', array(), false, 'all');
    wp_enqueue_style('product', get_template_directory_uri() . '/assets/files/product/product.css', array(), false, 'all');
    wp_enqueue_style('sidebar', get_template_directory_uri() . '/assets/files/sidebar/sidebar.css', array(), false, 'all');

    wp_enqueue_style('single', get_template_directory_uri() . '/assets/files/single/single.css', array(), false, 'all');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/files/header.css', array(), false, 'all');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/files/footer.css', array(), false, 'all');
    wp_enqueue_style('all', get_template_directory_uri() . '/assets/files/style.css', array(), false, 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/files/responsive.css', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), false, 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), 'all');


    wp_enqueue_script('jq', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), false, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
    wp_enqueue_script('index.js', get_template_directory_uri() . '/assets/files/index/index.js', array('jquery'), false, true);
    wp_enqueue_script('login.js', get_template_directory_uri() . '/assets/files/login/login.js', array('jquery'), false, true);
    wp_enqueue_script('my-account.js', get_template_directory_uri() . '/assets/files/my-account/my-account.js', array('jquery'), false, true);
    wp_enqueue_script('product.js', get_template_directory_uri() . '/assets/files/product/product.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function setup_theme()
{

    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
//    add_theme_support('woocommerce');

    add_image_size('article', 413, 300, true);

    register_nav_menus(
        array(
            'main_menu' => __('جایگاه فهرست اصلی '),
            'top_menu' => __('جایگاه فهرست بالای سایت')
        )
    );
}

add_action('after_setup_theme', 'setup_theme');