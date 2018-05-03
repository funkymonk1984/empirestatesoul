<?php
/*
	Template Name: Full Screen Featured Image
*/
?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content" class="container cf">
			<main id="main" class="col-sm-12 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content cf" itemprop="articleBody">
						<?php the_content(); ?>
					</section>
					<footer class="article-footer">
      					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
					</footer>
					<?php //comments_template(); ?>
				</article>
				<?php endwhile; else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
