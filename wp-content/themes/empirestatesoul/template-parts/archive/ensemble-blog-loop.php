<?php
	$categoryvariable = $cat;
	$numberofposts = $num;
	$args = 'category_name=' . $categoryvariable . '&showposts='.$numberofposts;
	query_posts( $args );
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="ensemble-blog col-sm-12 col-md-6 col-lg-4 margin-vertical-2">
		<div class="image padding-0">
			<div class="image-wrapper height-12">
				<?php the_post_thumbnail('full'); ?>
			</div>
		</div>

		<div class="content">
			<h3 class="text-left">
				<a href="<?php the_permalink();?>">
					<span style="font-weight:500;">
						<?php the_field('performance_event_type'); ?>
					</span>: 
					<span style="font-weight:300;">
						<?php echo get_field('performance_venue_name'); ?>
					</span>
				</a>
			</h3>
			<h5><?php the_field('performance_date'); ?></h5>
			<p style="font-size:1.2em;line-height:1.2em;" class="hidden-xs margin-1-auto performance_subtitle">
				<?php the_field('performance_subtitle'); ?>
			</p>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php endwhile;?>
<?php wp_reset_query(); ?>