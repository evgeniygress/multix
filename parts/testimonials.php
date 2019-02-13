<!-- ====== START TESTIMONIALS ======  -->
		<section class="testimonials text-center">
			<div class="testimonials-overlay sections">
				<div class="container">
					<div class="row">


						<div class="title">
							<h3><?php the_field('testimonial-title', 'option'); ?> <span><?php the_field('testimonial-strong', 'option'); ?></span></h3>
							<div class="devider"></div>
						</div>


						<div class="owl-carousel owl-theme">
							<?php
							if( have_rows('testimonial-item', 'option') ):
						    	while ( have_rows('testimonial-item', 'option') ) : the_row();
							?>
							<!-- TESTIMONIALS ITEM -->
							<div class="t-item">
								<div class="testimonial-box col-md-8 col-xs-12">
									<p><?php the_sub_field('testimonial-box-text'); ?></p>
									<!-- TESTIMONIAL NAME -->
									<h3><?php the_sub_field('testimonial-autor'); ?><span><?php the_sub_field('testimonial-company'); ?></span></h3>
								</div>
							</div>
							<?php
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ====== END TESTIMONIALS ======  -->