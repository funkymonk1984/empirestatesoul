<?php /* Template Name: Repertoire */ ?>
<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('template-parts/heros/hero','sub-page');?>
		<div id="inner-content" class="container-fluid padding-0">
			<section class="container repertoire-intro" style="padding:4rem 0 0 0;">
				<?php if( get_field('repertoire_facts_title') ): ?>
					<h3 class="lead col-sm-12 col-md-10 col-lg-8 margin-0-auto">
						<?php the_field('repertoire_intro_text');?>
					</h3>
				<?php endif; ?>
			</section>
			<section class="container-fluid" style="background-color: rgba(0,0,0,.025); padding:4rem 0; margin:4rem 0;">
				<div class="row container-fluid margin-0">
					<aside class="col-sm-6 col-md-2 col-lg-2">
						<div class="row margin-0">
							<?php if( get_field('repertoire_facts_title') ): ?>
								<h4 class="text-left">
									<?php the_field('repertoire_sample_list_title'); ?>:
								</h4>
							<?php endif; ?>
							<?php if( get_field('repertoire_facts_title') ): ?>
								<p class="lead small" style="line-height:1.2;">
									<?php the_field('repertoire_sample_list_subtitle'); ?>
								</p>
							<?php endif; ?>
							<?php if( have_rows('repertoire_sample_list') ): $i = 0; ?>
						    	<?php while ( have_rows('repertoire_sample_list') ) : the_row(); $i++; ?>
						    		<div class="margin-0 row sample-repertoire-row">
										<button style="width:100%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#songListModal<?php echo $i; ?>">
											<?php the_sub_field('repertoire_sample_list_title'); ?>
										</button>
									</div>

									<!-- MODAL -->
									<div class="modal fade" id="songListModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myModalLabel">
														<?php the_title(); ?>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<?php if( get_field('repertoire_facts_title') ): ?>
													<div class="modal-body">
														<?php the_sub_field('repertoire_sample_list'); ?>
													</div>
												<?php endif; ?>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
						    <?php endwhile; ?>
							<?php endif; ?>
						</div>
					</aside>
					<main style="padding:0 2vw;" id="main" class="col-sm-12 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<article role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<?php if( get_field('repertoire_table_embed') ): ?>
								<section class="padding-0" itemprop="articleBody">
									<?php the_field('repertoire_table_embed');?>
								</section>
							<?php endif; ?>
						</article>
					</main>
					<aside class="hidden-xs col-sm-12 col-md-2 col-lg-2">
						<div class="row margin-0">
							<?php if( get_field('repertoire_facts_title') ): ?>
								<h4 class="text-left">
									<?php the_field('repertoire_facts_title'); ?>:
								</h4>
							<?php endif; ?>
							<ul>
							<?php if( have_rows('repertoire_facts') ): $i = 0; ?>
						    <?php while ( have_rows('repertoire_facts') ) : the_row(); $i++; ?>
									<li class="small">
										<?php the_sub_field('repertoire_fact'); ?>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</div>
					</aside>
				</div>
			</section>
		</div>
	</div>
<?php get_footer(); ?>
