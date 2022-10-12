<?php

/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');

//Add widgets to Main Sidebar
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'search', array ('title' => '',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-posts', array ('title' => 'Recent Posts','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-comments', array ('title' => 'Comments','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'archives', array ('title' => ''));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'categories', array ('title' => ''));


/**
 * Imports for Ess. Grid Plugin
 */




/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Creative',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin porta, odio at sagittis vehicula",
    'file' => get_template_directory() . '/aletheme/demos/ikea/data/post_default.dat',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_post_1',
    'post_type' => 'post',
));



/**
 * Pages
 */


//Blog page
$ale_blog_id = ale_demo_content::add_page(array(
    'title' => 'Blog',
    'template' => 'index.php',
    'postspage'=>true,
));


//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/ikea/data/home.dat',
    'template' => 'page-home.php',
));


/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');

//Header Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));