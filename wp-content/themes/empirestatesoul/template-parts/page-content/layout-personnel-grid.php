<section class="personnel-grid" itemprop="articleBody">
	<div class="container-fluid ">

		<div class="section-heading">
			<?php if( get_sub_field('personnel_grid_title') ): ?>
				<h2>
					<?php the_sub_field('personnel_grid_title'); ?>
				</h2>
			<?php endif; ?>
			<?php if( get_sub_field('personnel_grid_subtitle') ): ?>
				<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field('personnel_grid_subtitle'); ?>
				</h3>
			<?php endif; ?>
		</div>


		<div class="container">
			<div class="row d-flex justify-content-center">
				<?php if (have_rows('personnel_grid_category_primary')) : ?>
					<?php while(have_rows('personnel_grid_category_primary')) : the_row(); ?>
						<?php $post_object = get_sub_field('personnel_primary'); ?>
						<?php if( $post_object ): ?>
							<?php $post = $post_object; ?>
							<?php setup_postdata( $post ); ?>
							<?php $memberSlug = ($post->post_name); ?>
							<div class="text-center col-sm person" style="margin:1rem 0;">
								<?php //$image = get_field('bio_primary_image'); ?>
								<div class="image">
									<!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal" /> -->
									<?php the_post_thumbnail('medium');?>
									<div class="overlay" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal" >
										<span>+</span>
									</div>
									<h5 class="text-center" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal">
										<?php the_title(); ?>
									</h5>
								</div>
							</div>
							<div class="modal fade" id="<?php echo $memberSlug; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="myModalLabel"><?php the_title(); ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<?php $image = get_field('bio_secondary_image'); ?>
											<?php the_post_thumbnail('full');?>
											<div style="margin-top:2.4vw;">
												<?php the_content(); ?>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>


		<?php if (have_rows('personnel_grid_category_secondary')) : ?>
			<div class="container d-none d-lg-block">
				<div class="container also-featuring">
					<div class="text-center">
						<h4 class="text-center">Also Featuring:</h4>
					</div>
					<div class="row d-flex justify-content-center">
						<?php while(have_rows('personnel_grid_category_secondary')) : the_row(); ?>
							<?php $post_object = get_sub_field('personnel_secondary'); ?>
							<?php if( $post_object ): ?>
								<?php $post = $post_object; ?>
								<?php setup_postdata( $post ); ?>
								<?php $memberSlug = ($post->post_name); ?>
								<div class="text-center col-sm-3 person" style="margin:1rem 0;">
									<?php //$image = get_field('bio_primary_image'); ?>
									<div class="image">
										<!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal" /> -->
										<?php the_post_thumbnail('medium');?>
										<div class="overlay" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal" >
											<span>+</span>
										</div>
										<h5 class="text-center" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal">
											<?php the_title(); ?>
										</h5>
									</div>
								</div>
								<div class="modal fade" id="<?php echo $memberSlug; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="myModalLabel"><?php the_title(); ?></h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<?php //$image = get_field('bio_secondary_image'); ?>
												<?php the_post_thumbnail('full');?>
												<?php the_content(); ?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
					<div class="container text-center" style="opacity:.6;margin-top:2vw;">
						<small>In large-ensemble formats, East Coast Soul can add additional vocalists for a rich vocal sound.</small>
					</div>
				</div>
			</div>
		<?php endif; ?>



	</div>
</section>
