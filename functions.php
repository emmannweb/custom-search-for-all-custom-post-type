<?php

add_action( 'pre_get_posts', function( $query ) {

    // Check  the query we want to change
    if( $query->is_main_query() && ! is_admin() && $query->is_search() ) {

        // Change the query parameters
	$query->set( 'post_type', array( 'post', 'product', 'clients' ) );
        $query->set( 'posts_per_page', 3 );

    }

} );
