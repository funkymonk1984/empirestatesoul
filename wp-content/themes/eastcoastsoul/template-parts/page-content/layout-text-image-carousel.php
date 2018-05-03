<section class="text-and-image-carousel" itemprop="articleBody">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-4 section-heading container margin-0-auto">
				<?php if( get_sub_field('text_and_image_carousel_title') ): ?>
					<h2 class="text-left">
						<?php the_sub_field('text_and_image_carousel_title'); ?>
					</h2>
				<?php endif; ?>
				<?php if( get_sub_field('text_and_image_carousel_subtitle') ): ?>
					<p class="text-left">
						<?php the_sub_field('text_and_image_carousel_subtitle'); ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="hidden-xs col-sm-12 col-md-12 col-lg-8">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php if( have_rows('text_and_image_carousel_images') ): $i = 0; ?>
					    <?php while ( have_rows('text_and_image_carousel_images') ) : the_row(); $i++;  ?>
					    	<li style="list-style:none;" data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
					    <?php endwhile; ?>
						<?php endif; ?>
					</ol>
					<div class="carousel-inner">
						<?php if( have_rows('text_and_image_carousel_images') ): $j = 0; ?>
					    <?php while ( have_rows('text_and_image_carousel_images') ) : the_row(); $j++;  ?>
					    	<div class="carousel-item">
				    			<?php $image = get_sub_field('text_and_image_carousel_image');?>
									<?php if( !empty($image) ): ?>
										<img class="d-block w-100 image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
					      </div>
					    <?php endwhile; ?>
						<?php endif; ?>
					</div>
					<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> -->
				</div>
			</div>
		</div>
	</div>
</section>
