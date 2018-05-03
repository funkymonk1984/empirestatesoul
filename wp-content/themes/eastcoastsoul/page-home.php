<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','home');?>
		<div id="inner-content" class="">
			<main id="main" class="col-sm-12 col-md-12 col-lg-12" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article itemscope itemtype="http://schema.org/BlogPosting">
						<h1 style="opacity:0;position:absolute;top:0;z-index:-999;">Boston Wedding Bands</h1>
						<?php //include ("includes/page-content.php"); ?>
						<?php get_template_part('template-parts/page', 'content');?>
					</article>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
