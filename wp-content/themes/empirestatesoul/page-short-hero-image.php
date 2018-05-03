<?php
/*
	Template Name: Short Hero Image
*/
?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content" class="container">
			<main id="main" class="col-sm-12 col-md-12 col-lg-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<section class="" itemprop="articleBody">
						<?php the_content(); ?>
					</section>
				</article>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</main>
			<?php // get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
