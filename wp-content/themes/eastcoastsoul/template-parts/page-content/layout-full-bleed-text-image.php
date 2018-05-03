<section class="full-bleed container-fluid d-flex align-items-center" style="background-image:url('<?php the_sub_field('full_bleed_image');?>');">
	<?php if( get_sub_field('full_bleed_image_content') ) : ?>

		<?php if( get_sub_field('full_bleed_image_orientation') == 'center' ): ?>
  	<div class="content container-fluid d-flex flex-wrap justify-content-center center">
		<?php endif; ?>

		<?php if( get_sub_field('full_bleed_image_orientation') == 'left' ): ?>
  	<div class="content container-fluid d-flex flex-wrap left">
		<?php endif; ?>

		<?php if( get_sub_field('full_bleed_image_orientation') == 'right' ): ?>
  	<div class="content container-fluid d-flex flex-wrap right">
		<?php endif; ?>

			<div class="container-fluid text padding-0">
				<?php if( get_sub_field('full_bleed_image_header') ): ?>
					<h2 class="color-white">
						<?php the_sub_field('full_bleed_image_header'); ?>
					</h2>
				<?php endif; ?>

				<?php if( get_sub_field('full_bleed_image_text') ): ?>
					<h3 class="lead color-white">
						<?php the_sub_field('full_bleed_image_text'); ?>
					</h3>
				<?php endif; ?>
			</div>

			<div class="buttons">
				<?php if( have_rows('full_bleed_image_buttons') ): ?>
					<?php while ( have_rows('full_bleed_image_buttons') ) : the_row(); ?>
						<a href="<?php the_sub_field('full_bleed_image_button_destination'); ?>" class="btn btn-primary-outline btn-lg">
							<?php the_sub_field('full_bleed_image_button_title'); ?> &raquo;
						</a>
				  <?php endwhile; ?>
				<?php endif; ?>
			</div>

  	</div>
		<div class="overlay"></div>
	<?php endif; ?>
</section>
