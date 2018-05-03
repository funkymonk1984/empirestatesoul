<?php if( have_rows('page_content') ): ?>

	<?php while ( have_rows('page_content') ) : the_row(); ?>

		<?php if( get_row_layout() == 'call_to_action' ): ?>

			<?php get_template_part('template-parts/page-content/layout', 'call-to-action');?>

		<?php elseif( get_row_layout() == 'text_image_carousel' ): ?>

			<?php get_template_part('template-parts/page-content/layout', 'text-image-carousel');?>

		<?php elseif( get_row_layout() == 'full_bleed_text_image' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'full-bleed-text-image');?>

		<?php elseif( get_row_layout() == 'text_image_content' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'text-image-content');?>

		<?php elseif( get_row_layout() == 'accolades_block' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'accolades');?>

		<?php elseif( get_row_layout() == 'media_block' ):  ?>

			<?php get_template_part( 'template-parts/page-content/layout', 'media-block' );?>

		<?php elseif( get_row_layout() == 'ensemble_grid' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'ensemble-grid');?>

		<?php elseif( get_row_layout() == 'performance_content' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'performance-content');?>

		<?php elseif( get_row_layout() == 'venue_grid' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'venue-grid');?>

		<?php elseif( get_row_layout() == 'personnel_grid' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'personnel-grid');?>

		<?php elseif( get_row_layout() == 'repertoire_block' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'repertoire-block');?>

		<?php elseif( get_row_layout() == 'testimonial_block' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'testimonial-block');?>

		<?php elseif( get_row_layout() == 'configurations_block' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'configurations-block');?>

		<?php elseif( get_row_layout() == 'blog_grid' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'blog-grid');?>

		<?php elseif( get_row_layout() == 'instagram_block' ):  ?>

			<?php get_template_part('template-parts/page-content/layout', 'instagram-block');?>

		<?php endif; ?>

	<?php endwhile; ?>

<?php endif; ?>
