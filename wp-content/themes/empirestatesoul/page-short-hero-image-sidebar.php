<?php
/*
	Template Name: Short Hero Image w/ Sidebar
*/
?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content" class="container">
			<div class="row">
				<main id="main" class="col-sm-12 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<section class="" itemprop="articleBody">
								<?php the_content(); ?>
							</section>
						</article>
					<?php endwhile;?>
					<?php endif; ?>
				</main>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
