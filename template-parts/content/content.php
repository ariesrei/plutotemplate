<?php
/**
 * Template part for displaying posts
 *
 */

?>

<div class="container">
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="entry-content">
			
			<?php
			
			the_content();

			?>
		</div><!-- .entry-content -->
	
	</article><!-- #post-<?php the_ID(); ?> -->

</div>