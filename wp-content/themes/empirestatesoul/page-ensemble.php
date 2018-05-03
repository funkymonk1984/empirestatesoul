<?php /* Template Name: Ensemble */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php //include("includes/ensemble-hero.php");?>
		<?php get_template_part('template-parts/heros/hero','ensemble');?>
		<div id="inner-content" class="">''
			<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<article>
					<?php get_template_part('template-parts/page', 'content');?>
				</article>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
