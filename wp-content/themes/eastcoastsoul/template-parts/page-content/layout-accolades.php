<section class="accolades container-fluid" style="background:#FFF;">
	<div class="container">

		<div class="section-heading">
			<?php if( get_sub_field('accolades_title') ): ?>
				<h2>
					<?php the_sub_field('accolades_title'); ?>
				</h2>
			<?php endif; ?>

			<?php if( get_sub_field('accolades_subtitle') ): ?>
				<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field('accolades_subtitle'); ?>
				</h3>
			<?php endif; ?>
		</div>

		<?php if( get_sub_field('accolades_display') ) { ?>
			<div class="container">
			  <?php if( have_rows('advertising','option') ): ?>
			   	<div class="row d-flex justify-content-center">
					  <?php while ( have_rows('advertising','option') ) : the_row(); ?>
							<?php if( have_rows('advertising_awards','option') ): ?>
								<?php while ( have_rows('advertising_awards','option') ) : the_row(); ?>
									<?php $image = get_sub_field('advertising_award_image'); ?>

									<?php if( $image ) { ?>
										<div class="accolade">
											<div class="thumbnail text-center">
												<img src="<?php echo $image['sizes']['ecs-small']; ?>"/>
											</div>
										</div>
									<?php } ?>

								<?php endwhile; ?>
							<?php endif; ?>
					    <?php endwhile; ?>
				    </div>
					<?php endif; ?>
				<h3 class="lead text-center">Visit us around the web!</h3>
				<div class="row d-flex justify-content-center">
					<?php if( have_rows('advertising','option') ): ?>
						<div class="">
						    <?php while ( have_rows('advertising','option') ) : the_row(); ?>
								<a target="_blank" class="btn btn-primary btn-lg" href="<?php the_sub_field('advertising_url'); ?>">
									<?php the_sub_field('advertising_title'); ?> &raquo;
								</a>
						    <?php endwhile; ?>
					    </div>
					<?php endif; ?>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
