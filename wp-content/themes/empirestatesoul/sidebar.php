<div id="sidebar" class="sidebar col-sm-12 col-md-3 col-lg-3" role="complementary">
	<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	<?php else : ?>
		<!-- No widgets -->
	<?php endif; ?>
</div>
