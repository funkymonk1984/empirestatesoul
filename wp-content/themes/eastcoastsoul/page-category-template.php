<?php get_header(); ?>
	<div id="content">
		
		<header class="container-fluid jumbotron transparent text-center" style="background-image:url('<?php echo get_template_directory_uri(); ?>/library/images/featured/blog-hero.jpg');">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<h2 class="col-sm-12 col-md-8 col-lg-6 margin-1-auto lead">
					Check out some of East Coast Soul's past performances.
				</h2>
			</div>
			<div class="overlay"></div>
		</header>

		<div id="inner-content" class="wrap cf">
			<main id="main" class="col-sm-12 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php query_posts('category_name=updates&showposts=11'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="col-sm-12 col-md-6 col-lg-6" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
					<header class="article-header">
						<div class="image-wrap">
							<?php the_post_thumbnail('full', array( 'class' => "image")); ?>
						</div>
						<h3 class="text-left entry-title">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<p class="byline entry-meta vcard">
                        	<?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
           						/* the time the post was published */
           						'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
           						/* the author of the post */
           						'<span class="by hidden">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author hidden" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
        					); ?>
						</p>
					</header>
					<section class="entry-content cf">
						<p><?php echo get_the_excerpt(); ?></p>
					</section>
					<footer class="article-footer cf">
						<?php printf( '<p class="footer-category">' . __('Categories', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
	          			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
					</footer>
				</article>
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
								<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
