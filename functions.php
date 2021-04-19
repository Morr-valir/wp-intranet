<?php 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
// Ajout des Scripts et du style CSS
function intranet_register_assets() {
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 'Bulma', get_template_directory_uri() . '/CSS/bulma.min.css',array(), '1.0');
    wp_enqueue_style( 'Main-CSS', get_template_directory_uri() . '/CSS/style.css',array(), '1.0');
    //Import des scripts
    wp_enqueue_script( 'Burger', get_template_directory_uri() . '/assets/burger.js', array(), '1.0', true);
    wp_enqueue_script( 'Axios', 'https://unpkg.com/axios/dist/axios.min.js', array(), '1.0', true);
    wp_enqueue_script( 'Vue', get_template_directory_uri() . '/assets/Vue/vue.min.js', array(), '1.0', true);
    wp_enqueue_script( 'Vue-comp', get_template_directory_uri() . '/assets/Vue/composant.js', array(), '1.0', true);
    wp_enqueue_script( 'Darkmode', get_template_directory_uri() . '/assets/darkmode.js', array(), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'intranet_register_assets' );
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
//Couleur de personnalisation custom sur le panel 
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
  //Style et balise plugin contact form 7 
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter( 'wpcf7_load_js', '__return_false' );
//Ajout custom post type "Sondages"
function wp_custom_post_type_sondages() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Sondages', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Sondage', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Les sondages'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les sondages'),
		'view_item'           => __( 'Voir les sondages'),
		'add_new_item'        => __( 'Ajouter un nouveau sondage'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer un sondage'),
		'update_item'         => __( 'Modifier un sondage'),
		'search_items'        => __( 'Rechercher un sondage'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	// On peut définir ici d'autres options pour notre custom post type
	$args = array(
		'label'               => __( 'sondage'),
		'description'         => __( 'Tous sur les Sondages'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'sondage'),
		'capability_type'     => 'sondage',
        'menu_icon'           => 'dashicons-info',
		'map_meta_cap'        => true,
		'taxonomies'          => array( 'category' ),

	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'sondage', $args );

}
add_action( 'init', 'wp_custom_post_type_sondages', 0 );
//Ajout custom post type "Mot du Maire"
function wp_custom_post_type_mot() {
	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Mot du maire', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Mot du maires', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Les mots du maire'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les mots'),
		'view_item'           => __( 'Voir les mots'),
		'add_new_item'        => __( 'Ajouter un nouveau mot'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer un mot'),
		'update_item'         => __( 'Modifier un mot'),
		'search_items'        => __( 'Rechercher un mot'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	// On peut définir ici d'autres options pour notre custom post type
	$args = array(
		'label'               => __( 'mot_du_maire'),
		'description'         => __( 'Tous sur les mots'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		//Différentes options supplémentaires
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'mot'),
		'capability_type'       => 'mot',
        'menu_icon' => 'dashicons-welcome-write-blog',
		'map_meta_cap'          => true,
		'taxonomies'          => array( 'category' ),


	);
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'mot_du_maire', $args );
}
add_action( 'init', 'wp_custom_post_type_mot', 0 );