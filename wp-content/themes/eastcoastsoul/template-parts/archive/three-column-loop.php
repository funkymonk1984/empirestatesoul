<?php
	$categoryvariable = $cat;
	$numberofposts = $num;
	$args = 'category_name=' . $categoryvariable . '&showposts='.$numberofposts;
	query_posts( $args );
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="col-sm-12 col-md-6 col-lg-4">

		<?php the_post_thumbnail('full'); ?>
		
		<h3><?php the_title(); ?></h3>
		<a href="<?php the_field("accolade_link"); ?>" >Link</a>
		<p><?php the_field("accolade_text"); ?></p>
	</div>
<?php endwhile;?>
<?php wp_reset_query(); ?>