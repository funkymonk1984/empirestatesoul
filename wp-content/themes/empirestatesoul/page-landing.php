<?php /* Template Name: Landing */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','home');?>
		<div id="inner-content" class="">
			<main id="main" class="col-sm-12 col-md-12 col-lg-12" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article itemscope itemtype="http://schema.org/BlogPosting">
						<?php get_template_part('template-parts/page', 'content');?>
					</article>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
