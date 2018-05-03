
<section class="media-block container-fluid">
	<div class="section-heading container margin-0-auto">
		<?php if( get_sub_field('media_block_title') ): ?>
			<h2><?php the_sub_field('media_block_title'); ?></h2>
		<?php endif; ?>
		<?php if( get_sub_field('media_block_subtitle') ): ?>
			<h3 class="padding-0 lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
				<?php the_sub_field('media_block_subtitle'); ?>
			</h3>
		<?php endif; ?>
	</div>
	<?php if( have_rows('media_block_options') ): ?>
		<?php while ( have_rows('media_block_options') ) : the_row(); ?>
			<?php if( get_row_layout() == 'media_block_single_video' ):  ?>
				<div class="container">
					<div class="row">
						<div class="embed-responsive embed-responsive-16by9">
					    	<?php the_sub_field('media_block_single_video_embed'); ?>
					    </div>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'media_block_single_audio' ):  ?>
				<div class="container">
					<div class="row">
						<?php the_sub_field('media_block_single_audio_embed'); ?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'media_block_video_audio' ):  ?>
				<div class="container padding-0">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 padding-0">
							<div class="embed-responsive embed-responsive-16by9">
						    	<?php the_sub_field('media_block_video_audio_video_embed'); ?>
						    </div>
					    </div>
					    <div style="padding-right:0;" class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
							<?php the_sub_field('media_block_video_audio_audio_embed'); ?>
						</div>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'media_block_video_grid' ):  ?>
				<div class="container-fluid video-grid">
					<?php if( get_sub_field('media_block_video_grid_title') ): ?>
						<h4 class="text-center">
							<?php the_sub_field('media_block_video_grid_title'); ?>
						</h4>
					<?php endif; ?>
					<?php if( get_sub_field('media_block_video_grid_subtitle') ): ?>
						<h5 class="text-center">
							<?php the_sub_field('media_block_video_grid_subtitle'); ?>
						</h5>
					<?php endif; ?>
			    <?php if( have_rows('media_block_video_grid') ): ?>
						<div class="row d-flex justify-content-center">
					    <?php while ( have_rows('media_block_video_grid') ) : the_row(); ?>
								<div class="video col-sm-6">
									<div class="embed-responsive embed-responsive-16by9">
							    	<?php the_sub_field('media_block_video_grid_video_embed'); ?>
							    </div>
								</div>
					    <?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="buttons row d-flex justify-content-center">
		<?php if( have_rows('media_block_buttons') ): ?>
		  <?php while ( have_rows('media_block_buttons') ) : the_row(); ?>
				<a class="btn btn-primary btn-lg" href="<?php the_sub_field('media_block_buttons_destination'); ?>">
					<?php the_sub_field('media_block_button_title'); ?>
				</a>
		  <?php endwhile; ?>
		<?php endif; ?>
	</div>

</section>
