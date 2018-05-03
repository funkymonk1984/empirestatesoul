<header class="container-fluid jumbotron transparent text-center" style="background-image:url('<?php the_field("sub_page_hero_image");?>');">
	<div class="content container-fluid">
		<h1><?php the_title(); ?></h1>
		<?php if( get_field('sub_page_hero_tagline') ): ?>
			<h2 class="d-none d-lg-block margin-1-auto lead">
				<?php the_field('sub_page_hero_tagline');?>
			</h2>
		<?php endif; ?>
	</div>
	<div class="overlay"></div>
</header>
