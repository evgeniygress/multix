<!-- ====== START FOOTER ======  -->
		<section class="sections footer">
			<div class="container">
				<div class="row">


					<!-- START FOOTER LOGO -->
					<div class="ft-logo col-md-3 col-sm-4 col-xs-7">
						<img src="<?php the_field('footer-logo', 'option'); ?>" width="80" alt="Footer Logo" />
					</div>
					<!-- END FOOTER LOGO -->


					<!-- START SOCIAL ICONS -->
					<div class="sc-icon">
					<?php
					if( have_rows('footer-social', 'option') ):
				    	while ( have_rows('footer-social', 'option') ) : the_row();
					?>
						<a href="<?php the_sub_field('url-social'); ?>">
							<span>
								<i class="fa <?php the_sub_field('icon-social'); ?>" aria-hidden="true"></i>
							</span>
						</a>
					<?php
						endwhile;
					endif;
					?>	
					</div>
					<!-- END SOCIAL ICONS -->


					<!-- START RIGHTS -->
					<div class="sub-footer">
						<h5><?php the_field('footer-copyright', 'option'); ?></h5>
					</div>


				</div>
			</div>
		</section>
		<!-- ====== END FOOTER ======  -->

	</body>
	<?php wp_footer(); ?>
</html>