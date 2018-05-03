<?php get_header(); ?>
	<div id="content">

		<header class="container-fluid jumbotron transparent text-center" style="background-image:url('<?php the_field("blog_hero_image","option"); ?>');');">
			<div class="content">
				<h1>
					<?php the_field("blog_hero_headline","option");?>
				</h1>
				<h2 class="d-none d-lg-block col-sm-12 col-md-8 col-lg-6 margin-1-auto lead">
					<?php the_field("blog_hero_tagline","option");?>
				</h2>
			</div>
			<div class="overlay"></div>
		</header>

		<div id="inner-content" class="container">
			<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<div class="all">
					<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
					<?php query_posts('post_type=performances&category_name=blog&paged=' . $paged); ?>
						<div class="articles">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'template-parts/article' ); ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<?php bones_page_navi(); ?>
					<?php wp_reset_query(); ?>
				</div>
			</main>
			<?php // get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
