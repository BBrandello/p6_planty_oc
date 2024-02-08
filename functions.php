<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css');
}

/*Personnalise le logo*/

add_theme_support('custom-logo');

/*Infos du thème à ne pas faire apparaître*/
function wpse_remove_edit_post_link($link)
{
    return '';
}
add_filter('edit_post_link', 'wpse_remove_edit_post_link');

/*Hook lien admin
Ajout du filtre*/
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

/*Ajout du lien admin*/
function add_admin_link($items, $args)
{
    if (is_user_logged_in()) {

        $bouton = '<li id="menu-item-1132"><a href="' . get_admin_url() . '">Admin</a></li>';

        $items .= $bouton;
    }

    /*Bouton commander*/
    $items .= '<a href="http://planty.local/commander/" itemprop="url"><li id="menu-item-1011" class="menu-item menu-item-type-post_type menu-item-object-page">Commander</li></a>';

    return $items;
}