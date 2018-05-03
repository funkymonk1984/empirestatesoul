<?php get_header(); ?>
	<div id="content">
		<header class="container-fluid jumbotron transparent text-center" style="background-image:url('<?php echo get_template_directory_uri(); ?>/library/images/featured/blog-hero.jpg');">
			<div class="content">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
			</div>
			<div class="overlay"></div>
		</header>
		<div id="inner-content" class="container-fluid">
			<div class="row">
				<?php get_sidebar(); ?>
				<main id="main" class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<h2 class="col-sm-12 col-md-8 col-lg-6 margin-1-auto lead">
						<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
					</h2>
					<div class="articles">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'template-parts/article' ); ?>
						<?php endwhile; ?>
						<?php bones_page_navi(); ?>
						<?php else : ?>
							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
						<?php endif; ?>
					</div>
				</main>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
