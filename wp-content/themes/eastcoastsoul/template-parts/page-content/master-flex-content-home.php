<?php if( have_rows('home_content') ): ?>
	
	<?php while ( have_rows('home_content') ) : the_row(); ?>
		
		<?php if( get_row_layout() == 'call_to_action' ): ?>
			
			<?php include ('call-to-action.php'); ?>
		
		<?php elseif( get_row_layout() == 'text_and_image_carousel' ): ?>

			<?php include ('text-and-image-carousel.php'); ?>

		<?php elseif( get_row_layout() == 'full_bleed_image' ):  ?>
			
			<?php include ('full-bleed-text-image.php'); ?>
		
		<?php elseif( get_row_layout() == 'text_and_image_content' ):  ?>
			
			<?php include ('text-and-image-content.php'); ?>

		<?php elseif( get_row_layout() == 'accolades' ):  ?>

			<?php include ('accolades.php'); ?>

		<?php elseif( get_row_layout() == 'media_block' ):  ?>

			<?php include ('media-block.php'); ?>

		<?php elseif( get_row_layout() == 'ensemble_grid' ):  ?>

			<?php include ('ensemble-grid.php'); ?>

		<?php elseif( get_row_layout() == 'performance_content' ):  ?>

			<?php include ('performance-content.php'); ?>

		<?php elseif( get_row_layout() == 'venue_grid' ):  ?>

			<?php include ('venue-grid.php'); ?>

		<?php elseif( get_row_layout() == 'blog_grid' ):  ?>

			<?php include ('blog-grid.php'); ?>
			
		<?php endif; ?>

	<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>