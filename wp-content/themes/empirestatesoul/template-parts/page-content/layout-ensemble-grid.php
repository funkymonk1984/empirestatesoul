<section class="ensembles container-fluid" itemprop="articleBody">
	<div class="container">
		<div class="section-heading">

			<?php if( get_sub_field('ensemble_grid_title') ): ?>
				<h2>
					<?php the_sub_field("ensemble_grid_title"); ?>
				</h2>
			<?php endif; ?>

			<?php if( get_sub_field('ensemble_grid_subtitle') ): ?>
				<h3 class="padding-0 lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field("ensemble_grid_subtitle"); ?>
				</h3>
			<?php endif; ?>

		</div>
	</div>
	<?php if( have_rows('ensembles') ): ?>
		<div class="row">
		  <?php while ( have_rows('ensembles') ) : the_row(); ?>
		    <div class="padding-0 margin-0 container-fluid ensemble">
					<div class="ensemble-inner" style="background-image:url('<?php the_sub_field("ensemble_image"); ?>');">
						<div class="overlay">
							<div class="content d-flex align-items-center justify-content-center flex-wrap">
								<div class="container-fluid">
									<h3>The</h3>
									<h2>
										<?php the_sub_field('ensemble_title'); ?>
									</h2>
									<h3>Ensemble</h3>
									<?php if( get_sub_field('ensemble_destination') ) { ?>
										<div class="button-wrapper">
											<a href="<?php the_sub_field('ensemble_destination'); ?>" class="btn btn-primary-outline btn-lg">Learn More &raquo;</a>
										</div>
									<?php } else { ?>
										<p class="color-white">More Coming Soon...</p>
									<?php } ?>
									<?php // endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
		  <?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>
