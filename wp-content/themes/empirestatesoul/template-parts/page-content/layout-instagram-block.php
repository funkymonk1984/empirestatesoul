
<section class="container-fluid">
	<div class="container">
		<div class="section-heading">
			<?php if (get_sub_field('instagram_block_title')) : ?>
				<h2><?php the_sub_field('instagram_block_title'); ?></h2>
			<?php endif; ?>
			<?php if (get_sub_field('instagram_block_sub_title')) : ?>
				<h3 class="lead text-center"><?php the_sub_field('instagram_block_sub_title'); ?></h3>
			<?php endif; ?>
		</div>
	</div>
	<div class="d-flex align-items-center container">
		<?php if (get_sub_field('instagram_block_wysiwyg')) : ?>
	    <?php the_sub_field('instagram_block_wysiwyg'); ?>
	  <?php endif; ?>
	</div>
</section>
