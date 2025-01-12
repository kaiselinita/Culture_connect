<?php
function mon_theme_assets() {
    // Charger le style Bootstrap
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        array(),
        null
    );

    //  pour charger le style principal du thème
    wp_enqueue_style(
        'mon-theme-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        '1.0'
    );

    //le script JavaScript de Bootstrap
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array('jquery'), // Dépend de jQuery
        null,
        true // Charger dans le footer
    );

   
    wp_enqueue_script(
        'mon-theme-script',
        get_template_directory_uri() . '/script.js', // Chemin vers le fichier script.js
        array(), 
        '1.0', // Version
        true // Charger dans le footer
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_assets');
function ajouter_swiper_assets() {
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'ajouter_swiper_assets');
function add_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}

  




