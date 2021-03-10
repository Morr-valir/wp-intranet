<?php
/*
Plugin Name: Module pour intranet
Description: Contient les custom posts types pour le fonctionnement des divers informations sur site. 
Author: PICARD Matthieu
Version: 1.1
*/

// Création du post Sondages
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

// Création du post Mot du maire
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