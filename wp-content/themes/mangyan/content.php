<div class="content container-fluid">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="panel panel-default">			
			<?php
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			?>
			<div class="panel-body">
				<?php the_content(); ?>
			</div>
		</div>		
	</article><!-- #post-## -->
</div>

