<?php
/*
	Template Name: Video
*/
?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content">
			<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<!-- INTRO -->
					<!-- <section class="container" itemprop="articleBody">
						<div class="col-sm-12 col-md-6 col-lg-7 about-intro-carousel">
							<img class="image image-wrap" src="<?php the_field('video_about_image');?>" />
						</div>
						<div class="col-sm-12 col-md-6 col-lg-5 about-intro-blurb">
							<h3 class="text-left">
								<?php the_field('video_about_title');?>
							</h3>
							<p class="text-left">
								<?php the_field('video_about_subtitle');?>
							</p>
						</div>
					</section> -->

					<section class="container" itemprop="articleBody">
						<!-- <h2 class="text-center">
						<?php the_field('video_title');?>
						</h2>
						<h3 class="col-sm-12 col-md-10 col-lg-8 margin-0-auto">
							<?php the_field('video_subtitle');?>
						</h3> -->
						<?php if( have_rows('video_block') ): ?>
						 	<?php while ( have_rows('video_block') ) : the_row(); ?>
						 		<div style="" class="padding-0 col-sm-12 col-md-10 col-lg-10 margin-0-auto">
							 		<div class="embed-responsive embed-responsive-16by9">
							        	<?php the_sub_field('video_embed'); ?>
							        </div>
						        </div>
						    <?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
					</section>

					<!-- <section class="container" itemprop="articleBody">
						<h2><?php the_field('media_audio_title');?></h2>
						<h3 class="col-sm-12 col-md-10 col-lg-8 margin-0-auto">
							<?php the_field('media_about_subtitle');?>
						</h3>

						<?php if( have_rows('media_audio_embed') ): ?>
						 	<?php while ( have_rows('media_audio_embed') ) : the_row(); ?>
						 		<div class="col-sm-12 col-md-6 col-lg-6">
						        	<?php the_sub_field('media_audio_track'); ?>
						        </div>
						    <?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
					</section> -->

					<footer class="article-footer">
      					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
					</footer>
					<?php //comments_template(); ?>
				</article>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</main>
			<?php // get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
