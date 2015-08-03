<?php

get_header();
	
	//have posts
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			//if page is blog, portfolio or contact
			if ( is_page( '16' ) OR is_page( '31' ) OR is_page( '26' ) ) :
				get_template_part( 'onepage' );
			else :
				get_template_part( 'content', get_post_format() );
			endif;
		endwhile;
	endif;
	
get_footer();
?>
