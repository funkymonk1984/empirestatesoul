<?php
	$categoryvariable = $vocalistCat;
	$numberofposts = $vocalistNum;
	$args = 'category_name=' . $categoryvariable . '&showposts='.$numberofposts;
	query_posts( $args );
?>

<?php while (have_posts()) : the_post(); ?>
	<?php $memberSlug = ($post->post_name); ?> 

	<!-- VOCALIST -->
	<div class="ensemble-members col-sm-12 col-md-3 col-lg-3 margin-vertical-1">
		<?php //the_post_thumbnail('full', array( 'class'	=> "image")); ?>
		<?php $image = get_field('bio_primary_image'); ?>
		<div class="image-wrapper padding-0" style="background-image:url('<?php echo $image['url']; ?>');">
			
			<!-- <img  src="" alt="<?php echo $image['alt']; ?>"> -->
		</div>
		<div class="content">
			<h4 class="text-center">
				<a href="<?php the_permalink();?>">
					<?php the_title(); ?>
				</a>
			</h4>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $memberSlug; ?>Modal">
				Learn More &raquo;
			</button>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="<?php echo $memberSlug; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
	      </div>
	      <div class="modal-body">
	      	<?php $image = get_field('bio_secondary_image'); ?>
			<img class="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	      	<?php the_content(); ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

<?php endwhile;?>
<?php wp_reset_query(); ?>