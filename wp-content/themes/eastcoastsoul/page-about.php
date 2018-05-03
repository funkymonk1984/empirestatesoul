<?php /* Template Name: About */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content">
			<main id="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<article>
					<?php get_template_part('template-parts/page-content');?>
				</article>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
