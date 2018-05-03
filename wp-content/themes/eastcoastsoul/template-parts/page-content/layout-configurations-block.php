<section class="ensemble-configurations container-fluid d-none d-lg-block" itemprop="articleBody">
	<div class="container">
		<div class="section-heading">
		<?php if( get_sub_field('configurations_block_title') ): ?>
			<h2>
				<?php the_sub_field('configurations_block_title');?>
			</h2>
		<?php endif; ?>
		<?php if( get_sub_field('configurations_block_subtitle') ): ?>
			<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
				<?php the_sub_field('configurations_block_subtitle'); ?>
			</h3>
		<?php endif; ?>
		</div>
		<?php if( have_rows('ensemble_configurations') ): ?>
			<div class="row d-flex justify-content-center margin-0">
		    <?php while ( have_rows('ensemble_configurations') ) : the_row(); ?>
	    		<div class="ensemble-configuration col-sm-6 col-md-10 col-lg-3">
		    		<?php if( get_sub_field('ensemble_configurations_title') ): ?>
			    		<h4>
			    			<?php the_sub_field('ensemble_configurations_title'); ?>
			    		</h4>
		    		<?php endif; ?>
		    		<?php if( get_sub_field('ensemble_configurations_subtitle') ): ?>
			    		<h5 class="text-center">
			    			<?php the_sub_field('ensemble_configurations_subtitle'); ?>
			    		</h5>
		    		<?php endif; ?>
		    		<ul class="ensemble-configuration-list row">
			    		<?php if( have_rows('ensemble_configurations_member_block') ): ?>
						    <?php while ( have_rows('ensemble_configurations_member_block') ) : the_row(); ?>
					    		<li class="" style="list-style:none;">
					    			<i class="fa fa-user"></i>
					    			<?php if( get_sub_field('ensemble_configurations_member') ): ?>
					    				<?php the_sub_field('ensemble_configurations_member'); ?>
					    			<?php endif; ?>
					    		</li>
						    <?php endwhile; ?>
					    <?php endif; ?>
				    </ul>
			    </div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>
</section>
