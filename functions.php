<?php
require_once get_theme_file_path("./inc/customizer.php");
require_once get_theme_file_path("./inc/tgm.php");
function cat_after_setup_theme()
{
    load_theme_textdomain("cat");
    add_theme_support("post-thumbnails",array("post","page"));
    add_theme_support("title-tag");
    add_theme_support('custom-header');
    // add custom logo
    $cat_custom_logo = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
    );

    add_theme_support('custom-logo', $cat_custom_logo);
    // register nav
    register_nav_menus(array(
        'topmenu' =>__("Top Menu",'cat'),
        'footer-one' =>__("Footer One",'cat'),
        'footer-two' =>__("Footer Two",'cat'),
        'footer-three' =>__("Footer Three",'cat'),
        'footer-four' =>__("Footer Four",'cat'),
    ));
    
}
add_action("after_setup_theme", "cat_after_setup_theme");

function cat_enqueue_assets(){
    wp_enqueue_style("fonts", "//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    wp_enqueue_style("font-awesome", get_theme_file_uri("assets/css/font-awesome.min.css"));
    wp_enqueue_style("bootstrap", get_theme_file_uri("assets/vendor/bootstrap/bootstrap.min.css"));
    wp_enqueue_style("default", get_theme_file_uri("assets/css/default.css"));
    wp_enqueue_style("template-style", get_theme_file_uri("assets/css/style.css"),null,time());
    wp_enqueue_style("responsive", get_theme_file_uri("assets/css/responsive.css"));
    wp_enqueue_style("cat-css",get_stylesheet_uri(),null,time());

    //Javascript

    wp_enqueue_script("main-js",get_theme_file_uri("./assets/js/script.js"),null,time(),true);
}
add_action("wp_enqueue_scripts", "cat_enqueue_assets");

function cat_pagination()
{
    global $wp_query;
    $links = paginate_links(
        array(
            'current' => max(1, get_query_var(1)),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'mid_size' => '2',
            'next_text' => '<i class="fa-solid fa-arrow-right-long"></i>',
            'prev_text' => '<i class="fa-solid fa-arrow-left-long"></i>',
            'prev_next' => true
        )
    );
 

    echo wp_kses_post($links);
}

// register sidebar

/**
 * Add a sidebar.
 */
function cat_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Categoris', 'cat'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget categories-widget    %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Tags', 'cat'),
        'id'            => 'sidebar-2',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget   %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Latest Posts', 'cat'),
        'id'            => 'sidebar-3',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget   %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
    // about page
    register_sidebar(array(
        'name'          => __('About Page Text One Widget', 'cat'),
        'id'            => 'about-text-one-widget',
        'description'   => __('Widgets in this area will be shown on About pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget widget-body   %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('About Page Text Two Widget', 'cat'),
        'id'            => 'about-text-two-widget',
        'description'   => __('Widgets in this area will be shown on About pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget widget-body   %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('About Page Three  Widget', 'cat'),
        'id'            => 'about-text-three-widget',
        'description'   => __('Widgets in this area will be shown on About pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget widget-body   %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('About Page  Four Widget', 'cat'),
        'id'            => 'about-text-four-widget',
        'description'   => __('Widgets in this area will be shown on About pages.', 'cat'),
        'before_widget' => '<div id="%1$s" class="widget widget-body   %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'cat_widgets_init');



