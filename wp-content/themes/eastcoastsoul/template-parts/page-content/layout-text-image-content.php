<section class="text-and-image-wrapper container-fluid">
	<div class="container-fluid">

		<div class="section-heading container margin-0-auto">
			<?php if( get_sub_field('text_and_image_content_title') ): ?>
				<h2>
					<?php the_sub_field('text_and_image_content_title'); ?>
				</h2>
			<?php endif; ?>

			<?php if( get_sub_field('text_and_image_content_subtitle') ): ?>
				<h3 class="padding-0 lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field('text_and_image_content_subtitle'); ?>
				</h3>
			<?php endif; ?>
		</div>

		<?php if( have_rows('text_and_image_content_block') ): $i = 0; ?>
	    <?php while ( have_rows('text_and_image_content_block') ) : the_row(); $i++; ?>
	      <div class="row text-and-image d-flex align-items-stretch">
					<?php if (get_sub_field('text_and_image_content_block_image')) : ?>
						<?php $image = get_sub_field('text_and_image_content_block_image'); ?>
						<div class="image col-lg" style="background-image:url('<?php echo $image['url']; ?>');" id="image-<?php echo $i; ?>">
							<?php if( get_sub_field('text_and_image_content_testimonial') ): ?>
								<div class="testimonial d-sm-none d-md-block">
									<blockquote>"...<?php the_sub_field('text_and_image_content_testimonial'); ?>..."</blockquote>
									<p class="source"><strong><?php the_sub_field('text_and_image_content_testimonial_source'); ?></strong> - <?php the_sub_field('text_and_image_content_testimonial_date'); ?></p>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<?php if (get_sub_field('text_and_image_content_block_text')) : ?>
						<div class="text col-lg d-flex flex-wrap justify-content-center align-items-center">
							<div class="container-fluid padding-0">
								<?php if( get_sub_field('text_and_image_content_block_title') ): ?>
									<h4 class="center-on-mobile"><?php the_sub_field('text_and_image_content_block_title'); ?></h4>
								<?php endif; ?>
								<?php if( get_sub_field('text_and_image_content_block_text') ): ?>
									<div class="center-on-mobile">
										<?php the_sub_field('text_and_image_content_block_text'); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
	    <?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('text_and_image_content_buttons') ): ?>
			<div class="button-wrapper row text-center d-flex justify-content-center">
		    <?php while ( have_rows('text_and_image_content_buttons') ) : the_row(); ?>
		        <a href="<?php the_sub_field('text_and_image_content_button_destination'); ?>" class="btn btn-primary btn-lg">
		        	<?php the_sub_field('text_and_image_content_button_text'); ?>
		        </a>
		    <?php endwhile; ?>
	    </div>
		<?php endif; ?>
	</div>
</section>
