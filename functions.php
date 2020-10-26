<?php

/**
 * Loads stylesheets: bootstrap and styles.css
 *
 * @return void
 */
function load_stylesheets()
{


    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * Loads jquery
 *
 * @return void
 */
function jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'jquery');

/**
 * Loads javascript
 *
 * @return void
 */
function loadjs()
{
    wp_register_script('customjs',  get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');




/**
 * Load Font Awesome
 *
 * @return void
 */
function font()
{
    wp_enqueue_script('font', get_template_directory_uri() . '/js/all.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'font');
}
add_action('wp_enqueue_scripts', 'font');






/**
 * Enables support for menus
 */
add_theme_support('menus');

/**
 * Changes menu item Id from menu-item-xx to the name of the page
 *
 * @param [type] $item
 * @param [type] $args
 * @return $item
 */
function menu_id_page($item, $args)
{
    $page = get_post($args->object_id);
    $item = $page->post_name;
    return $item;
}
add_filter('nav_menu_item_id', 'menu_id_page', 10, 2);

/**
 * Registers menus
 */
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);
