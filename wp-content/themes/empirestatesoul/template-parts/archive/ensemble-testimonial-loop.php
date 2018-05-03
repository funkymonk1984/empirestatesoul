<?php
	$categoryvariable = $cat;
	$numberofposts = $num;
	$args = 'category_name=' . $categoryvariable . '&showposts='. $numberofposts . '&orderby=rand';
	query_posts( $args );
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="testimonial padding-0 col-sm-12 col-md-12 col-lg-12">
		<blockquote>
			"<?php the_field('testimonial_text');?>"
		</blockquote>
		<p class="pull-right">
			<strong>
			<?php the_field('testimonial_source');?>
			</strong>
			<?php the_field('testimonial_date');?>
			 - 
			<?php the_field('testimonial_location');?>
		</p>
		<div class="clearfix"></div>
	</div>
<?php endwhile;?>
<?php wp_reset_query(); ?>