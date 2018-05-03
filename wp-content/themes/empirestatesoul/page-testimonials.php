<?php /* Template Name: Testimonials */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content" class="">
			<main id="main" class="col-sm-12 col-md-12 col-lg-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<section class="testimonial-button-wrapper">
					<?php if( get_field('testimonials_button_groups_title') ): ?>
						<h3><?php the_field("testimonials_button_groups_title");?></h3>
					<?php endif; ?>
					<?php if( have_rows('testimonials_button_group') ): ?>
						<div class="container d-flex justify-content-center">
						  <?php while ( have_rows('testimonials_button_group') ) : the_row(); ?>
						    <a class="btn btn-primary btn-lg" target="_blank" href="<?php the_sub_field('testimonial_button_link'); ?>"><?php the_sub_field('testimonial_button_content'); ?> &raquo;</a>
						  <?php endwhile; ?>
						</div>
					<?php endif; ?>
				</section>
				<section class="testimonial-wrapper">

					<?php query_posts('post_type=reviews&showposts=99&orderby=rand'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="testimonial-outer">
							<div class="testimonial">
								<blockquote>
									"<?php the_field('testimonial_text');?>"
								</blockquote>
								<p class="source">
									<small>
										<strong><?php the_field('testimonial_source');?></strong> <?php the_field('testimonial_date');?> - <?php the_field('testimonial_location');?>
									</small>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</section>
				<?php // get_sidebar(); ?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
