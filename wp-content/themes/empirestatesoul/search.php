<?php get_header(); ?>
	<div id="content">
		<header class="container-fluid jumbotron transparent text-center" style="background-image:url('<?php echo get_template_directory_uri(); ?>/library/images/featured/blog-hero.jpg');">
			<div class="content">
				<h1 class="archive-title">
					<span>
						<?php _e( 'Search Results for:', 'bonestheme' ); ?>
					</span> 
					<?php echo esc_attr(get_search_query()); ?>
				</h1>
			</div>
			<div class="overlay"></div>
		</header>
		<div id="inner-content" class="container">
			<main id="main" class="col-sm-12 col-md-8 col-lg-8" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
						<header class="entry-header article-header">
							<!-- <div class="image-wrap">
								<?php the_post_thumbnail('full', array( 'class' => "image")); ?>
							</div> -->
							<h3 class="text-left search-title entry-title">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h3>
      						<p class="byline entry-meta vcard">
        						<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
       							    /* the time the post was published */
           							'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
              							    /* the author of the post */
               						'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
        						); ?>
      						</p>
						</header>
						<section class="entry-content" style="background-color: none;">
							<?php //the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
						</section>
						<footer style="margin-top:1.2em;" class="article-footer">
							<?php if(get_the_category_list(', ') != ''): ?>
          					<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
          					<?php endif; ?>

         					<?php the_tags( '<p style="color:#333; font-size:14px;font-weight:inherit;" class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
						</footer> <!-- end article footer -->
					</article>
				<?php endwhile; ?>
					<?php bones_page_navi(); ?>
				<?php else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
