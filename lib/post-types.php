<?php 

/* Property Listings*/

function post_type_listings() {
register_post_type(
                    'listings', 
                    array( 'public' => true,
					 		'publicly_queryable' => true,
							'has_archive' => true, 
							'hierarchical' => false,
							'menu_icon' => get_stylesheet_directory_uri() . '/images/listing.png',
                    		'labels'=>array(
    									'name' => _x('Predios', 'Publicación de Predios'),
    									'singular_name' => _x('Predio', 'publicar un nombre singular de Predio'),
    									'add_new' => _x('Agregar nuevo', 'Predio'),
    									'add_new_item' => __('Agregar un nuevo Predio'),
    									'edit_item' => __('Editar Predio'),
    									'new_item' => __('Nuevo Predio'),
    									'view_item' => __('Ver Predio'),
    									'search_items' => __('Buscar Predios'),
    									'not_found' =>  __('No hay Predios'),
    									'not_found_in_trash' => __('No hay predios en la basura'), 
    									'parent_item_colon' => ''
  										),							 
                            'show_ui' => true,
							'menu_position'=>5,
							'query_var' => true,
							'rewrite' => TRUE,
							'rewrite' => array( 'slug' => 'listing', 'with_front' => FALSE,),
							'register_meta_box_cb' => 'mytheme_add_box',
							'supports' => array(
							 			'title',
										'thumbnail',
										'comments',
										'editor'
										)
							) 
					);
				} 
add_action('init', 'post_type_listings');

/* Price range taxonomy */

function create_range_taxonomy() 
{
$labels = array(
	  						  'name' => _x( 'Rango', 'taxonomy general name' ),
    						  'singular_name' => _x( 'rango', 'taxonomy singular name' ),
    						  'search_items' =>  __( 'Buscar Rango' ),
   							  'all_items' => __( 'Todos los Rangos' ),
    						  'parent_item' => __( 'Parent Range' ),
   					   		  'parent_item_colon' => __( 'Parent Range:' ),
   							  'edit_item' => __( 'Editar Rango' ), 
  							  'update_item' => __( 'Actualizar Rango' ),
  							  'add_new_item' => __( 'Agregar nuevo Rango' ),
  							  'new_item_name' => __( 'Agregar nuevo nombre de Rango' ),
); 	
register_taxonomy('range',array('listings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'range' ),
  ));
}

/* Location Taxonomy */

function create_location_taxonomy() 
{
$labels = array(
	  						  'name' => _x( 'Ubicación', 'taxonomy general name' ),
    						  'singular_name' => _x( 'Ubicación', 'taxonomy singular name' ),
    						  'search_items' =>  __( 'Search Location' ),
   							  'all_items' => __( 'All Locations' ),
    						  'parent_item' => __( 'Parent Location' ),
   					   		  'parent_item_colon' => __( 'Parent Location:' ),
   							  'edit_item' => __( 'Editar Ubicación' ), 
  							  'update_item' => __( 'Actualizar Ubicación' ),
  							  'add_new_item' => __( 'Agregar nueva Ubicación' ),
  							  'new_item_name' => __( 'Nuevo nombre de Ubicación' ),
); 	
register_taxonomy('location',array('listings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));

}

/* Type of property Taxonomy */

function create_property_taxonomy() 
{
$labels = array(
	  						  'name' => _x( 'Tipo de Propiedad', 'taxonomy general name' ),
    						  'singular_name' => _x( 'Tipo de Propiedad', 'taxonomy singular name' ),
    						  'search_items' =>  __( 'Search Property type' ),
   							  'all_items' => __( 'All Property types' ),
    						  'parent_item' => __( 'Parent Property type' ),
   					   		  'parent_item_colon' => __( 'Parent Property type' ),
   							  'edit_item' => __( 'Editar Tipo de Propiedad' ), 
  							  'update_item' => __( 'Actualizar Tipo de Propiedad' ),
  							  'add_new_item' => __( 'Agregar Tipo de Propiedad' ),
  							  'new_item_name' => __( 'Agregar nuevo nombre para Tipo de Propiedad' ),
); 	
register_taxonomy('property',array('listings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'property' ),
  ));

}

/* Area Taxonomy */

function create_area_taxonomy() 
{
$labels = array(
	  						  'name' => _x( 'Area', 'taxonomy general name' ),
    						  'singular_name' => _x( 'Area', 'taxonomy singular name' ),
    						  'search_items' =>  __( 'Search Areas' ),
   							  'all_items' => __( 'All Areas' ),
    						  'parent_item' => __( 'Parent Area' ),
   					   		  'parent_item_colon' => __( 'Parent Area' ),
   							  'edit_item' => __( 'Editar Area' ), 
  							  'update_item' => __( 'Actualizar Area' ),
  							  'add_new_item' => __( 'Agregar Area' ),
  							  'new_item_name' => __( 'Nueva Area' ),
); 	
register_taxonomy('area',array('listings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'area' ),
  ));

}


/* Listing type Taxonomy */

function create_type_taxonomy() 
{
$labels = array(
	  						  'name' => _x( 'Tipo de Contrato', 'taxonomy general name' ),
    						  'singular_name' => _x( 'Tipo de Contrato', 'taxonomy singular name' ),
    						  'search_items' =>  __( 'Search Listing types' ),
   							  'all_items' => __( 'All Listing types' ),
    						  'parent_item' => __( 'Parent Listing types' ),
   					   		  'parent_item_colon' => __( 'Parent Listing type' ),
   							  'edit_item' => __( 'Editar Tipo de Contrato' ), 
  							  'update_item' => __( 'Actualizar Tipo de Contrato' ),
  							  'add_new_item' => __( 'Agregar nuevo Tipo de Contrato' ),
  							  'new_item_name' => __( 'Nuevo Tipo de Contrato' ),
); 	
register_taxonomy('type',array('listings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => 'radio',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}


/* Bedrooms Taxonomy */

function create_bedrooms_taxonomy() 
{
$labels = array(
	  						  'name' => _x( 'Cuartos', 'taxonomy general name' ),
    						  'singular_name' => _x( 'Cuartos', 'taxonomy singular name' ),
    						  'search_items' =>  __( 'Buscar por Cuartos' ),
   							  'all_items' => __( 'Toda la cantidad de Cuartos' ),
    						  'parent_item' => __( 'Parent Bedrooms' ),
   					   		  'parent_item_colon' => __( 'Parent Bedrooms' ),
   							  'edit_item' => __( 'Editar caracteristica de Cuartos' ), 
  							  'update_item' => __( 'Actualizar caracteristica de Cuartos' ),
  							  'add_new_item' => __( 'Agregar caracteristica de Cuartos' ),
  							  'new_item_name' => __( 'Nueva caracteristica de Cuartos' ),
); 	
register_taxonomy('bedrooms',array('listings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bedroom' ),
  ));

}



add_action( 'init', 'create_area_taxonomy', 0 );
add_action( 'init', 'create_range_taxonomy', 0 );
add_action( 'init', 'create_location_taxonomy', 0 );
add_action( 'init', 'create_property_taxonomy', 0 );
add_action( 'init', 'create_type_taxonomy', 0 );
add_action( 'init', 'create_bedrooms_taxonomy', 0 ); 




/* PRE-DEFINE TERMS */

##Featured##
function add_range_term_featured() {
if(!is_term('Featured', 'type')){
  wp_insert_term('Featured', 'type');
}
}

##Reduced#
function add_range_term_reduced() {
if(!is_term('Reduced', 'type')){
  wp_insert_term('Reduced', 'type');
}
}

##Sold#
function add_range_term_sold() {
if(!is_term('Sold', 'type')){
  wp_insert_term('Sold', 'type');
}
}


add_action( 'init', 'add_range_term_featured' );
add_action( 'init', 'add_range_term_reduced' );
add_action( 'init', 'add_range_term_sold' );





?>