<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//Widget Zone de recherche
add_action( 'widgets_init', 'nouvelle_zone_widgets_init' );
function nouvelle_zone_widgets_init() {
    register_sidebar( array(
        'name'          => 'Barre de recherche',
        'id'            => 'nouvelle_zone',
        'before_widgets'    => '<section id="sidebar-recherche">',
        'after_widgets'     => '</section>',
        'before_title'      => '<span class="title is-4">',
        'after_title'       => '</span>',
    ) );
}
//Sidebar page article
add_action( 'widgets_init', 'sidebar_article_widgets_init' );
function sidebar_article_widgets_init() {
    register_sidebar( array(
        'name'              => 'Page article',
        'id'                => 'sidebar_article',
        'before_widgets'    => '<section class="sidebar-article">',
        'after_widgets'     => '</section>',
        'before_title'      => '<span class="subtitle">',
        'after_title'       => '</span>',
    ) );
}
//Sidebar Breadcrumb 
add_action( 'widgets_init', 'Breadcrumb_widgets_init' );
function Breadcrumb_widgets_init() {
    register_sidebar( array(
        'name'              => 'Breadcrumb',
        'id'                => 'Breadcrumb ',
        'before_widgets'    => '<section class="Breadcrumb ">',
        'after_widgets'     => '</section>',
        'before_title'      => '<span class="subtitle">',
        'after_title'       => '</span>',
    ) );
}
//Création emplacement menu
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function msk_custom_admin_color_palette() {
    wp_admin_css_color(
      'msk-colors',
      __('Mosaika'),
      get_stylesheet_directory_uri() . '/library/css/admin/Mairie/admin-style.css',
      array('#363636', '#2f3348', '#e69f23', '#79b75c'),
      array('#aa9d88', '#9ebaa0', '#738e96', '#f2fcff')
    );
  }
  add_action('admin_init', 'msk_custom_admin_color_palette');