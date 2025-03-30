/*
Theme Name: Mon Thème Enfant
Template: /astra
*/
<?php

if (!defined('ABSPATH')) {
    exit;
}


require_once get_stylesheet_directory() . '/cpt-portfolio.php';
function use_single_projet_for_posts($template) {
    if (is_single() && 'post' == get_post_type()) {
        // Si c'est un article classique, utiliser le template single-portfolio.php
        $template = locate_template('single-projet.php');
    }
    return $template;
}
add_filter('template_include', 'use_single_projet_for_posts');
function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

add_action('init', function() {
    error_log(print_r(get_post_types(), true));
});

add_theme_support('post-thumbnails');