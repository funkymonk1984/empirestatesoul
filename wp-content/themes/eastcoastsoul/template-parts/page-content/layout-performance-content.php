<section class="performance" itemprop="articleBody">
	<div class="container-fluid">
		<div class="section-heading">
			<?php if( get_sub_field('performance_content_title') ): ?>
				<h2>
					<?php the_sub_field('performance_content_title'); ?>
				</h2>
			<?php endif; ?>
			<?php if( get_sub_field('performance_content_subtitle') ): ?>
				<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field('performance_content_subtitle'); ?>
				</h3>
			<?php endif; ?>
		</div>
		<div class="performance container-fluid">
			<div class="row">
				<?php if( have_rows('performance_content_portion') ): ?>
		    	<?php while ( have_rows('performance_content_portion') ) : the_row(); ?>
		    		<div class="performance-inner col-sm-6">
			    		<?php if( get_sub_field('performance_content_portion_title') ): ?>
					    	<h3 class="text-center">
					    		<?php the_sub_field('performance_content_portion_title'); ?>
					    	</h3>
				    	<?php endif; ?>
				    	<?php if( get_sub_field('performance_content_portion_image') ): ?>
					    	<?php $image = get_sub_field('performance_content_portion_image'); ?>
								<div class="image-wrapper height-24">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					    	</div>
				    	<?php endif; ?>
				    	<?php if( get_sub_field('performance_content_portion_subtitle') ): ?>
					    	<h5 class="text-center">
					    		<?php the_sub_field('performance_content_portion_subtitle'); ?>
					    	</h5>
				    	<?php endif; ?>

							<div class="row margin-0">
					    	<?php if( have_rows('performance_content_portion_content') ): ?>
									<?php while ( have_rows('performance_content_portion_content') ) : the_row(); ?>
										<?php if( get_row_layout() == 'performance_content_portion_text' ): ?>
											<div class="content">
												<?php if( get_sub_field('performance_content_portion_text_title') ): ?>
													<h4 class="text-center">
														<?php the_sub_field('performance_content_portion_text_title');?>
													</h4>
												<?php endif; ?>
												<?php if( get_sub_field('performance_content_portion_text_image') ): ?>
											    <?php $image = get_sub_field('performance_content_portion_text_image'); ?>
													<div class="image-wrapper height-12">
														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
										    	</div>
									    	<?php endif; ?>
												<?php if( get_sub_field('performance_content_portion_text_area') ): ?>
													<p>
														<?php the_sub_field('performance_content_portion_text_area');?>
													</p>
												<?php endif; ?>
											</div>
										<?php elseif( get_row_layout() == 'performance_content_portion_embed' ): ?>
											<?php the_sub_field('performance_content_portion_embed');?>
										<?php elseif( get_row_layout() == 'performance_content_portion_wysiwyg' ): ?>
											<?php if( get_sub_field('performance_content_portion_wysiwyg_title') ): ?>
												<h5 class="text-center">
													<?php the_sub_field('performance_content_portion_wysiwyg_title');?>
												</h5>
											<?php endif; ?>
											<div class="container-fluid padding-0">
												<?php the_sub_field('performance_content_portion_wysiwyg');?>
											</div>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
			    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
