<section class="container-fluid">
	<div class="container text-center">
	<div class="section-heading container margin-0-auto">
		<?php if( get_sub_field('repertoire_block_title') ): ?>
			<h2>
				<?php the_sub_field('repertoire_block_title'); ?>
			</h2>
		<?php endif; ?>
		<?php if( get_sub_field('repertoire_block_subtitle') ): ?>
			<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
				<?php the_sub_field('repertoire_block_subtitle'); ?>
			</h3>
		<?php endif; ?>
	</div>
	<button type="button" class="margin-0-auto btn btn-primary btn-lg" data-toggle="modal" data-target="#repertoireModal">
		Launch Repertoire &raquo;
	</button>

		<!-- Modal -->
	<div class="modal fade bs-example-modal-lg"  id="repertoireModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<p>You probably noticed the "Soul" in or name. Yes, we love soul music. But we want you to know that we perform music from all genres and decades.</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php if( get_sub_field('repertoire_block_wysiwyg') ): ?>
						<?php the_sub_field('repertoire_block_wysiwyg'); ?>
					<?php endif; ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</section>
