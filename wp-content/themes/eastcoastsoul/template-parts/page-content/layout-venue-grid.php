<section class="wedding-venues" itemprop="articleBody">
	<div class="container">
		<div class="section-heading">
			<?php if( get_sub_field('venue_grid_title') ): ?>
				<h2>
					<?php the_sub_field('venue_grid_title'); ?>
				</h2>
			<?php endif; ?>
			<?php if( get_sub_field('venue_grid_subtitle') ): ?>
				<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field('venue_grid_subtitle'); ?>
				</h3>
			<?php endif; ?>
		</div>
		<div class="wedding-venue-content-block-wrapper">
			<?php if( have_rows('venues', 'option') ): ?>
	    	<?php while ( have_rows('venues', 'option') ) : the_row(); ?>
		    	<div class="wedding-venue-content-block">
				    <?php $image = get_sub_field('venue_logo'); ?>
						<img class="image" src="<?php echo $image['sizes']['ecs-small']; ?>" alt="<?php echo $image['alt']; ?>">
						<h5 class="text-center">
							<a title="Navigate to <?php the_sub_field('venue_title'); ?>" target="_blank" href="<?php the_sub_field('venue_link'); ?>">
		    				<?php the_sub_field('venue_title'); ?>
							</a>
		    		</h5>
		    	</div>
	    	<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
