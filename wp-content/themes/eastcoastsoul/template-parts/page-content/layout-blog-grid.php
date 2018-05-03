<section class="blog-grid" itemprop="articleBody">
	<div class="container-fluid padding-0">
		<div class="section-heading">
			<?php if( get_sub_field('blog_grid_title') ): ?>
				<h2>
					<?php the_sub_field('blog_grid_title'); ?>
				</h2>
			<?php endif; ?>
			<?php if( get_sub_field('blog_grid_subtitle') ): ?>
				<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
					<?php the_sub_field('blog_grid_subtitle'); ?>
				</h3>
			<?php endif; ?>
		</div>

		<?php
			$numberofposts = get_sub_field('blog_grid_post_quantity');
			$term = get_sub_field('blog_grid_category');
			$args = array(
				'cat' => $term,
				'posts_per_page' => $numberofposts,
				//'offset' => 1,
				'post_type' => 'performances'
			);
		?>

		<?php $query = new WP_Query( $args ); ?>
		<div class="articles container">
			<?php if ( $query->have_posts() ) { ?>
				<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>
					<?php get_template_part( 'template-parts/article' ); ?>
				<?php } ?>
			<?php } ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
