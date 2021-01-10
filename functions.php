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
        time(),
        'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        time(),
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
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', time(), true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'jquery');

/**
 * Loads popper
 *
 * @return void
 */
function popper()
{

    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', '', time(), true);
    add_action('wp_enqueue_scripts', 'popper');
}
add_action('wp_enqueue_scripts', 'popper');

/**
 * Loads javascript
 *
 * @return void
 */
function loadjs()
{
    wp_register_script('customjs',  get_template_directory_uri() . '/js/scripts.js', '', time(), true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


/**
 * Loads bootstrap
 *
 * @return void
 */
function bootstrap()
{

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', time(), true);
    add_action('wp_enqueue_scripts', 'bootstrap');
}
add_action('wp_enqueue_scripts', 'bootstrap');






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
        'top-left-menu' => __('Top Left Menu', 'theme'),
        'top-right-menu' => __('Top Right Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);
