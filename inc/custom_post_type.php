<?php

/**
 * Post custom "Planos"
 * 
 * Creation of custom post "plano"
 * 
 */
function planoType() {
	$labels = array(
		'name' => _x('Planos', 'post type general name'),
	    'singular_name' => _x('Plano', 'post type singular name'),
	    'add_new' => _x('Adicionar Novo', 'slideshow item'),
	    'add_new_item' => __('Adicionar Novo Plano'),
	    'edit_item' => __('Editar Plano'),
	    'new_item' => __('Novo Plano'),
	    'view_item' => __('Ver Plano'),
	    'search_items' => __('Procurar Plano'),
	    'not_found' =>  __('Nenhum Plano Encontrado'),
	    'not_found_in_trash' => __('Nenhum Plano na Lixeira'),
	    'parent_item_colon' => ''
	);

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title','editor'),
        'rewrite' => array('slug' => 'plano')
      );

    register_post_type( 'plano' , $args ); # registering the new post type
}
add_action('init', 'planoType'); # action

/**
 * Post custom "Histórias"
 *
 * Creation of custom post "plano"
 *
 */
function timelineType() {
    $labels = array(
        'name' => _x('Histórias', 'post type general name'),
        'singular_name' => _x('História', 'post type singular name'),
        'add_new' => _x('Adicionar Nova', 'slideshow item'),
        'add_new_item' => __('Adicionar Novo História'),
        'edit_item' => __('Editar História'),
        'new_item' => __('Nova História'),
        'view_item' => __('Ver História'),
        'search_items' => __('Procurar História'),
        'not_found' =>  __('Nenhuma História Encontrado'),
        'not_found_in_trash' => __('Nenhuma História na Lixeira'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title','editor', 'thumbnail'),
        'rewrite' => array('slug' => 'historia')
    );

    register_post_type( 'historia' , $args ); # registering the new post type
}
add_action('init', 'timelineType'); # action