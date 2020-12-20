<?php

namespace App;

function theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

function register_assets()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function menu_class(array $prmClasses): array
{
    $prmClasses[] = 'nav-item';

    return $prmClasses;
}

function menu_links_class(array $prmAttributes): array
{
    $prmAttributes['class'] = 'nav-link';

    return $prmAttributes;
}

add_action('after_setup_theme', 'App\theme_supports');
add_action('wp_enqueue_scripts', 'App\register_assets');
add_filter('nav_menu_css_class','App\menu_class');
add_filter('nav_menu_link_attributes', 'App\menu_links_class');
