<?php /* Template Name Posts: Performance Update */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php if( get_field('performance_high_res_featured_image') ): ?>
			<header class="container-fluid jumbotron high-res transparent text-center" style="margin-top:0; background-image:url('<?php the_field("performance_high_res_featured_image");?>');">
		<?php endif; ?>
		<?php if( get_field('performance_standard_res_featured_image') ): ?>
			<header class="container jumbotron standard-res transparent text-center" style="background-image:url('<?php the_field("performance_standard_res_featured_image");?>');">
		<?php endif; ?>
				<div class="content">
					<h3><?php the_field('performance_date'); ?></h3>
					<h2><?php the_field('performance_bride_name'); ?> &amp; <?php the_field('performance_groom_name'); ?></h2>
					<h1 class="col-sm-12 col-md-10 col-lg-6 margin-0-auto">
						<span><?php the_field('performance_venue_name'); ?></span><br /> <?php the_field('performance_city'); ?>, <?php the_field('performance_state'); ?>
					</h1>
				</div>
				<div class="overlay">
					<?php if( get_field('performance_photographer_name') ): ?>
						<div class="meta">
							<div class="col-sm-12 col-md-6 col-lg-12">
								<p class="pull-right">Photographer: <a href="<?php the_field('performance_photographer_url'); ?>" target="_blank"><?php the_field('performance_photographer_name'); ?> &raquo;</a></p>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</header>

		<div id="inner-content" class="container-fluid padding-0">
			<main id="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

						<section class="performance-subtitle">
							<div class="container text-center">
								<?php if( get_field('performance_subtitle') ): ?>
									<h3 class="center-on-mobile lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
										<?php the_field('performance_subtitle'); ?>
									</h3>
								<?php endif; ?>
								<?php if( get_field('performance_venue_website') ): ?>
									<strong>
										<a style="margin-bottom:0 !important;" class="btn btn-primary margin-2-auto" href="<?php the_field('performance_venue_website'); ?>" target="_blank">Venue Website &raquo;</a>
									</strong>
								<?php endif; ?>
								<div class="clear"></div>
							</div>
						</section>

						<?php if( have_rows('performance_content') ): ?>
							<?php while ( have_rows('performance_content') ) : the_row(); ?>
							  <?php if( get_row_layout() == 'performance_content_block' ): ?>

									<section class="performance-content">
										<div class="container">
						        	<div class="performance-content-block row d-flex align-items-center">
												<?php if (get_sub_field('performance_content_block_image')) : ?>
													<div class="d-flex image col-lg">
														<div class="image-wrapper height-24 margin-2-auto">
															<?php $image = get_sub_field('performance_content_block_image'); ?>
								        			<img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								        		</div>
								        	</div>
												<?php endif; ?>
												<?php if (get_sub_field('performance_content_block_content')) : ?>
								        	<div class="d-flex flex-wrap content col-lg">
								        		<?php if( get_sub_field('performance_content_block_title') ): ?>
									        		<h3 class="center-on-mobile"><?php the_sub_field('performance_content_block_title'); ?></h3>
								        		<?php endif; ?>
														<?php if (get_sub_field('performance_content_block_content')) : ?>
															<p class="center-on-mobile"><?php the_sub_field('performance_content_block_content'); ?></p>
														<?php endif; ?>
								        	</div>
												<?php endif; ?>
						        	</div>
										</div>
									</section>

								<?php elseif( get_row_layout() == 'performance_gallery_block' ): ?>

									<section class="performance-gallery">
										<div class="container">
											<h2 class="text-center">Gallery</h2>
											<div class="gallery">
												<?php
													$image_ids = get_field('performance_gallery', false, false);
													$shortcode = '[gallery ids="' . implode(',', $image_ids) . '"]';
													$gallery = do_shortcode( $shortcode );
													echo slb_activate($gallery);
												?>
											</div>
										</div>
									</section>

								<?php elseif( get_row_layout() == 'performance_video_block' ): ?>

									<section class="performance-video">
										<div class="container">
											<h2 class="text-center">Video</h2>
											<div class="embed-responsive embed-responsive-16by9">
												<?php the_field('performance_video'); ?>
											</div>
										</div>
									</section>

								<?php elseif( get_row_layout() == 'performance_configuration_block' ): ?>

									<section class="performance-configuration-block">
										<div class="container">
											<div class="row">
												<div class="col-sm ceremony-content">
													<h5 class="text-left">Ceremony</h5>
													<p>
														<?php $selected = get_field('performance_ceremony_music'); ?>
														<?php if( in_array('guitar', $selected) ) { ?>
															<i class="fa fa-user"></i>
															<span>Solo Guitar</span>
															<br />
														<?php } ?>
														<?php if( in_array('piano', $selected) ) { ?>
															<i class="fa fa-user"></i>
															<span>Solo Piano</span>
															<br />
														<?php } ?>
														<?php if( in_array('none', $selected) ) { ?>
															<span>None</span>
															<br />
														<?php } ?>
														<?php if( in_array('sound', $selected) ) { ?>
															<i class="fa fa-music"></i>
															<span>Sound</span>
															<br />
														<?php } ?>
													</p>
												</div>

												<div class="col-sm cocktail-content">
													<h5 class="text-left">Cocktail</h5>
													<?php $performance_cocktail_hour = get_sub_field('performance_cocktail_hour');?>
													<p>
														<?php for ($j = 0; $j < $performance_cocktail_hour; $j++) { ?>
														  <i class="fa fa-user"></i>
														<?php } ?>
													</p>
												</div>

												<div class="col-sm ensemble-content">
													<h5 class="text-left">Ensemble</h5>
													<?php $performance_ensemble_size = get_sub_field('performance_ensemble_size'); ?>
													<p>
														<?php for ($i = 0; $i < $performance_ensemble_size; $i++) { ?>
														  <i class="fa fa-user"></i>
														<?php } ?>
													</p>
												</div>
											</div>
										</div>
									</section>

								<?php elseif( get_row_layout() == 'performance_testimonial_block' ): ?>

									<section class="performance-testimonial">
										<div class="container">
											<h2 class="text-center">Testimonial</h2>
											<div class="testimonial">
												<blockquote>
													"<?php the_sub_field('performance_testimonial_quote'); ?>"
												</blockquote>
												<?php if (get_sub_field('performance_testimonial_source') == 'bride') { ?>
													<p class="source"><small><strong><?php the_sub_field('performance_bride_name'); ?></strong> - the Bride</small></p>
												<?php } else if (get_field('performance_testimonial_source') == 'groom') { ?>
											     <p class="source"><small><strong><?php the_sub_field('performance_groom_name'); ?></strong> - the Groom</small></p>
												<?php } else { ?>
													<p>Someone else</p>
												<?php } ?>
											</div>
										</div>
									</section>

								<?php elseif( get_row_layout() == 'performance_full_bleed_image_block' ): ?>

									<section class="performance-full-bleed-image">
										<div class="container">
											<?php $performance_full_bleed_image = get_sub_field('performance_full_bleed_image'); ?>
											<img src="<?php echo $performance_full_bleed_image['url']; ?>" title="<?php echo $performance_full_bleed_image['title']; ?>" />
										</div>
									</section>

								<?php elseif( get_row_layout() == 'performance_similar_posts' ): ?>

									<section class="blog-grid" itemprop="articleBody">
										<div class="container padding-0">
											<div class="section-heading">
												<?php if( get_sub_field('performance_similar_post_title') ): ?>
													<h2>
														<?php the_sub_field('performance_similar_post_title'); ?>
													</h2>
												<?php endif; ?>
												<?php if( get_sub_field('performance_similar_post_sub_title') ): ?>
													<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
														<?php the_sub_field('performance_similar_post_sub_title'); ?>
													</h3>
												<?php endif; ?>
											</div>

											<?php
												//$numberofposts = get_sub_field('blog_grid_post_quantity');
												$term = get_sub_field('performance_similar_post_category');
												$args = array(
													'cat' => $term,
													//'posts_per_page' => $numberofposts,
													'offset' => 1,
													'post_type' => 'performances'
												);
											?>

											<?php $query = new WP_Query( $args ); ?>
											<div class="articles">
												<?php if ( $query->have_posts() ) { ?>
													<?php while ( $query->have_posts() ) { ?>
														<?php $query->the_post(); ?>
														<?php get_template_part( 'template-parts/article' ); ?>
													<?php } ?>
												<?php } ?>
												<?php wp_reset_postdata(); ?>
											</div>
										</div>
									</section>

								<?php endif; ?>
					    <?php endwhile; ?>
						<?php endif; ?>
            <footer class="article-footer">
            	<?php // printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>
             	<?php // the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
    	    </footer>
        </article>
				<?php endwhile; ?>
				<?php endif; ?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
