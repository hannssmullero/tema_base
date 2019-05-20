<?php
add_filter( 'rwmb_meta_boxes', 'metasimagenes' );

function metasimagenes( $meta_boxes ){
	
	
	//Imagenes home
	$meta_boxes[] = array(
	    'id'       => 'imagenes',
	    'title'    => 'Imagenes Home',
	    'post_types' => array('carrusel'),
	    'fields' => array(
		     array(
	            'name' => 'Imagenes', // Optional
	            'id' => 'imagen-home',
	            'type' => 'group',
	            'clone'  => true,
				'sort_clone' => true,
	            'fields' => array(
	               array(
					'name' => 'Imagen',
					'id'   => "imagen",
					'type' => 'file_input',
					),
	                
	            ),
	        ),
	        
	    )
	);
	
	
		
return $meta_boxes;
}