			<footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
				<div class="top-footer">
					<div class="inner-footer container">
						<div class="row">
							<div class="footer-widget col-sm-12 col-md-6 col-lg-7">
								<?php if( get_field('footer_large_section_title','option') ): ?>
									<h2>
										<?php the_field('footer_large_section_title','option');?>
									</h2>
								<?php endif; ?>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-6" style="margin-bottom:1.2rem;">
										<a class="" href="<?php the_field('footer_large_section_button_destination','option');?>">
											<img alt="Boston Wedding Bands - East Coast Soul - Weddings" class="image" src="<?php the_field('footer_large_section_image','option');?>" />
										</a>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<p class="color-white">
											<?php the_field('footer_large_section_text','option');?>
										</p>
										<a class="btn btn-primary-outline btn-lg" href="<?php the_field('footer_large_section_button_destination','option');?>">
											<?php the_field('footer_large_section_button_text','option');?> &raquo;
										</a>
									</div>
								</div>
							</div>
							<div class="footer-widget col-sm-12 col-md-6 col-lg-5">
								<h2>Contact</h2>
								<div class="contact">
									<?php if( get_field('contact_email','option') ): ?>
										<p class="color-white margin-0">
											<span class="fa fa-fw fa-envelope"></span>
											<span class="">Email: <a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a>
											</span>
										</p>
									<?php endif; ?>
									<?php if( get_field('contact_phone','option') ): ?>
										<p class="color-white">
											<span class="fa fa-fw fa-phone "></span>
											<span class="">Phone: <?php the_field('contact_phone', 'option'); ?></span>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<?php if (!is_front_page()): ?>
					<div class="d-none d-lg-block instagram-footer">
						<div class="inner-footer container padding-0">
							<div class="row">
								<div class="footer-widget padding-0 col-sm-12 col-md-4 col-lg-4">
									<h2>Instagram</h2>
									<p>Follow us, stalk us, like us!</p>
								</div>
								<div class="footer-widget col-sm-12 col-md-8 col-lg-8 padding-0">
									<?php echo do_shortcode( '[instagram-feed]' );?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>


				<div class="bottom-footer">
					<div class="inner-footer container">
						<div class="row">
							<div class="footer-widget col-sm-12 col-md-6 col-lg-6">
								<?php dynamic_sidebar( 'footer-widgets-1' ); ?>
							</div>
							<div class="footer-widget col-sm-12 col-md-6 col-lg-6">
								<?php dynamic_sidebar( 'footer-widgets-2' ); ?>
							</div>
							<div class="footer-widget col-sm-12 col-md-6 col-lg-4">
								<?php //dynamic_sidebar( 'footer-widgets-6' ); ?>
							</div>
						</div>
					</div>
				</div>
				<p class="source-org copyright">
					<small>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</small>
				</p>
			</footer>
		</div>
		<?php // all js scripts are loaded in library/bones.php ?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
