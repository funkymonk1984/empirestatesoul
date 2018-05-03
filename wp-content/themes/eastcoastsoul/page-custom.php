<?php
/*
	Template Name: Custom Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="">
		
		<header class="container-fluid jumbotron transparent text-center" style="background-image:url('<?php the_field('sub_page_hero_image');?>">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php if( get_field('sub_page_hero_tagline') ): ?>
					<h2 class="lead">
						<?php the_field('sub_page_hero_tagline');?>
					</h2>
				<?php endif; ?>
				<p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Book This Band.</a>
				</p>
			</div>
			<div class="overlay"></div>
		</header>
		
		<div id="inner-content" class="container cf">
			<main id="main" class="col-sm-12 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<p class="byline vcard">
							<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
						</p>
					</header>

					<section class="entry-content cf" itemprop="articleBody">
						<?php the_content(); ?>
					</section>
					<footer class="article-footer">
      					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
					</footer>
					<?php comments_template(); ?>
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
