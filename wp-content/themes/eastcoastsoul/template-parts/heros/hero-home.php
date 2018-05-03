<?php if( get_field('home_hero_video') ) { ?>
  <div class="easyhtml5video video-hero">
		<video muted="muted" loop="loop" autoplay="autoplay" style="width:100%" title="Boston Wedding Band - East Coast Soul" poster="<?php echo get_template_directory_uri(); ?>/library/images/video-poster.jpg">
			<source src="<?php echo get_template_directory_uri(); ?>/library/video/website-hero.webm" type="video/webm" />
			<source src="<?php echo get_template_directory_uri(); ?>/library/video/website-hero.mp4" type="video/mp4" />
			<source src="<?php echo get_template_directory_uri(); ?>/library/video/website-hero.mov" type="video/mov" />
		</video>
    <div class="overlay">
      <div class="intro-text text-center">
        <h4 class="text-center">Welcome to</h4>
        <h1 class="text-center">East Coast Soul</h1>
        <h3 class="text-center">The premier live music experience in Boston, New York, and beyond.</h3>
      </div>
    	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    		<div class="carousel-inner" role="listbox">
    			<?php if( have_rows('home_hero_testimonials') ): ?>
    			    <?php while ( have_rows('home_hero_testimonials') ) : the_row(); ?>
    						<div class="carousel-item row justify-content-center">
    			        <div class="carousel-caption d-none d-md-block">
    			        	<h2 class="col-sm-12 col-md-10 col-lg-8">
    			        		"<?php the_sub_field('home_hero_testimonial_quote'); ?>
    			        	</h2>
    			        	<p>
    			        		<strong><?php the_sub_field('home_hero_testimonial_source'); ?></strong> -  <?php the_sub_field('home_hero_testimonial_date'); ?>
    			        	</p>
    			        </div>
    		        </div>
    			    <?php endwhile; ?>
    				<?php else : ?>
    			<?php endif; ?>
    		</div>
    	</div>
    	<!-- <div class="arrow">
    		<i class="fa fa-arrow-down" aria-hidden="true"></i>
    	</div> -->
    </div>
	</div>
	<div class="home-video-mobile-hero"></div>
	<script>
		jQuery(document).ready(function($) {
			$(".home-video-mobile-hero").backstretch("<?php the_field('home_mobile_hero'); ?>");
		});
	</script>
<?php } else { ?>
  <div class="home-image-hero">
    <div class="overlay">
      <div class="intro-text text-center">
        <?php if (is_front_page()) : ?>
          <h1 class="text-center">East Coast Soul</h1>
          <h3 class="text-center"><small>The premier live music experience in Boston, the Northeast, and beyond.</small></h3>
        <?php else: ?>
          <h1 class="text-center">East Coast Soul</h1>
          <h3 class="text-center"><small>The premier live music experience in New York, the Northeast, and beyond.</small></h3>
        <?php endif; ?>

      </div>
    	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    		<div class="carousel-inner" role="listbox">
    			<?php if( have_rows('home_hero_testimonials') ): ?>
    			    <?php while ( have_rows('home_hero_testimonials') ) : the_row(); ?>
    						<div class="carousel-item row justify-content-center">
    			        <div class="carousel-caption d-none d-md-block">
    			        	<h2 class="col-sm-12 col-md-10 col-lg-8">
    			        		"<?php the_sub_field('home_hero_testimonial_quote'); ?>
    			        	</h2>
    			        	<p>
    			        		<strong><?php the_sub_field('home_hero_testimonial_source'); ?></strong> -  <?php the_sub_field('home_hero_testimonial_date'); ?>
    			        	</p>
    			        </div>
    		        </div>
    			    <?php endwhile; ?>
    				<?php else : ?>
    			<?php endif; ?>
    		</div>
    	</div>
    	<!-- <div class="arrow">
    		<i class="fa fa-arrow-down" aria-hidden="true"></i>
    	</div> -->
    </div>
  </div>
	<script>
		jQuery(document).ready(function($) {
			$(".home-image-hero").backstretch([
	    	<?php if( have_rows('home_hero_photos') ): $i = 0; ?>
			    <?php while ( have_rows('home_hero_photos') ) : the_row(); $i++; ?>
					<?php if ($i > 1) { echo ", "; } ?><?php echo '"';?><?php the_sub_field("home_hero_photo");?><?php echo '"';?>
			    <?php endwhile; ?>
				<?php else : ?>
			  <?php endif; ?>
			], {duration: 3000, fade: 750});
		});
	</script>
	<div class="home-video-mobile-hero"></div>
	<script>
		jQuery(document).ready(function($) {
			$(".home-video-mobile-hero").backstretch("<?php the_field('home_mobile_hero'); ?>");
		});
	</script>
<?php } ?>
