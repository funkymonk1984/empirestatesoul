<section class="call-to-action container-fluid padding-0">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="content col-sm-12 col-md-7 col-lg-7">
				<?php if( get_sub_field('call_to_action_text') ): ?>
					<h3 class="lead center-on-mobile text-left">
						<?php the_sub_field('call_to_action_text'); ?>
					</h3>
				<?php endif; ?>
			</div>
			<div class="buttons col-sm-12 col-md-5 col-lg-5 d-flex justify-content-center">
				<div class="row margin-0">
				<?php if( have_rows('call_to_action_buttons') ): ?>
			    <?php while ( have_rows('call_to_action_buttons') ) : the_row(); ?>
		        <a href="<?php the_sub_field('call_to_action_button_destination'); ?>" class="col-sm btn btn-primary-outline btn-lg">
		        	<?php the_sub_field('call_to_action_button_text'); ?>
		        </a>
			    <?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
