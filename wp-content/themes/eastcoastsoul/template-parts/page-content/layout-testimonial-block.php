<section class="container-fluid ensemble-testimonial <?php if (get_sub_field('testimonial_block_image')) { ?>image<?php } ?>">
	<?php if (get_sub_field('testimonial_block_image')) { ?>
		<div class="image container-fluid padding-0" style="background-image:url('<?php the_sub_field('testimonial_block_image'); ?>');">
			<div class="overlay"></div>
	<?php } else { ?>
		<div class="no-image container-fluid padding-0">
	<?php } ?>
		<div class="content container">
			<div class="section-heading">
				<?php if( get_sub_field('testimonial_block_title') ): ?>
					<h2>
						<?php the_sub_field('testimonial_block_title');?>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('testimonial_block_subtitle') ): ?>
					<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
						<?php the_sub_field('testimonial_block_subtitle'); ?>
					</h3>
				<?php endif; ?>
			</div>

			<?php
			$category = get_sub_field('testimonial_block_featured_testimonial_category');
			$num = 1;
				$args = array(
					'cat' => $category,
					'post_type' => 'reviews',
					'showposts' => $num,
					'orderby' => 'rand'
				);
			?>

			<?php $query = new WP_Query( $args ); ?>

			<?php if ( $query->have_posts() ) { ?>
				<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>
					<div class="testimonial">
						<blockquote class="lead text-left">
							"<?php the_field('testimonial_text');?>"
						</blockquote>
						<p class="source">
							<small>
								<strong><?php the_field('testimonial_source');?></strong> <?php the_field('testimonial_date');?> - <?php the_field('testimonial_location');?>
							</small>
						</p>
					</div>
				<?php } ?>
			<?php } ?>
			<?php wp_reset_postdata(); ?>
			<?php if (get_sub_field("testimonial_block_featured_testimonial_category")) : ?>
				<p class="buttons text-center">
					<?php if (get_sub_field('testimonial_block_image')) { ?>
						<button type="button" class="btn btn-primary-outline btn-lg" data-toggle="modal" data-target="#testimonialModal">
					<?php } else { ?>
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#testimonialModal">
					<?php } ?>
						See More &raquo;
					</button>
				</p>
			<?php endif; ?>

			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg"  id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header d-flex align-items-center justify-content-between">
							<h4 style="margin:0;" class="text-center">Testimonials</h4>
							<button style="padding-top:0; padding-bottom:0;" type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php
							$category = get_sub_field('testimonial_block_featured_testimonial_category');
								$args = array(
									'cat' => $category,
									'orderby' => 'rand',
									'post_type' => 'reviews'
								);
							?>
							<?php $query = new WP_Query( $args ); ?>

							<?php if ( $query->have_posts() ) { ?>
								<?php while ( $query->have_posts() ) { ?>
									<?php $query->the_post(); ?>
									<div class="testimonial modal-testimonial">
										<blockquote class="lead" <?php if (is_front_page()) { echo 'style=color:#333 !important;'; }?>>
											"<?php the_field('testimonial_text');?>"
										</blockquote>
										<p class="source">
											<small>
												<strong>
													<?php the_field('testimonial_source');?>
												</strong>
												<?php the_field('testimonial_date');?> - <?php the_field('testimonial_location');?>
											</small>
										</p>
									</div>
									<hr />
								<?php } ?>
							<?php } ?>
							<?php wp_reset_postdata(); ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
