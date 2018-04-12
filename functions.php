<?php
// Don't paste me



// Modify the meta info on post footer
 add_filter( 'genesis_post_meta', 'lc_post_meta_filter' );
 function lc_post_meta_filter( $post_meta ) {
 
         // where do we apply the filter
	 if ( is_home() || is_front_page() || is_archive() || is_search() ) {
                
    // and...the filter
 	 	$post_meta = '[post_categories before="Categorías: "]';
    
 		return $post_meta;
    
	}
  
  // On posts we get rid of the commas just in tags
	elseif ( is_single() ) {
  
		$post_meta = '[post_categories before="Categorías: "] [post_tags before="Etiquetas: " sep=""]';
		return $post_meta;
    
	}
 } 
