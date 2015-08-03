<div class="onepage container-fluid">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="panel panel-default onepage-panel">			
			<div class="panel-body">
				<?php //the_content(); ?>
				<?php 
					$str = "Happy Birthday";
					
					for ($i = 0; $i<=4; $i++) {
						
						if ($i == 3)
							echo $str."..............";
						else 
							echo $str;
						
						if ($i != 2 AND $i != 3 AND $i != 4) {
							echo " to you.";
						}
						echo "</br>";
					}
					
					echo "sir Howard!";
				
				?>
			</div>
		</div>		
	</article><!-- #post-## -->
</div>

