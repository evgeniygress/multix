<!-- ====== START CONTACT ======  -->
		<section class="sections contact" id="contact" data-scroll-index="5">
			<div class="container">
				<div class="row">


					<!-- START CONTACT SECTION TITLE -->
					<div class="cont-title col-md-5">
						<?php
						if( have_rows('contact-title', 'option') ):
					    	while ( have_rows('contact-title', 'option') ) : the_row();
						?>
						<h3><?php the_sub_field('contact-title1'); ?> <span><?php the_sub_field('contact-title2'); ?></span> <?php the_sub_field('contact-title3'); ?> <span><?php the_sub_field('contact-title4'); ?></span></h3>
						<?php
							endwhile;
						endif;
						?>
						<p><?php the_field('contact-text', 'option'); ?></p>
						<ul class="info">
							<li>
								<span class="icon icon-map"></span>
								<p><?php the_field('contact-adress', 'option'); ?></p>
							</li>
							<li>
								<span class="icon icon-mobile"></span>
								<p><?php the_field('contact-tell', 'option'); ?></p>
							</li>
							<li>
								<span class="icon icon-envelope"></span>
								<p><?php the_field('contact-email', 'option'); ?></p>
							</li>
							<li>
								<span class="icon icon-refresh"></span>
								<p><?php the_field('contact-day', 'option'); ?></p>
							</li>
						</ul>
					</div>
					<!-- END CONTACT SECTION TITLE -->


					<!-- START CONTACT FORM -->
					<div class="contact-form col-md-7">
						<form action="http://joker-themes.com/multix-dd/demos/Waves-Version/php/contact.php" method="POST" class="cont-fo">


							<div class="contact-item col-md-12">
								<input type="text" name="name" placeholder="Name *" required="required">
							</div>
							<div class="contact-item col-md-12">
								<input type="email" name="email" placeholder="Email *" required="required">
							</div>
							<div class="contact-item col-md-12">
								<input type="text" name="subject" placeholder="Subject">
							</div>
							<div class="contact-item col-md-12">
								<textarea id="form_message" name="message" placeholder="Message *" rows="4" required="required" data-error="Message."></textarea>
							</div>
							<div class="contact-item col-md-12">
								<input type="submit" class="button disabled" value="Send Message">
							</div>


						</form>
					</div>
					<!-- END CONTACT FORM -->


				</div>
			</div>
		</section>
		<!-- ====== END CONTACT ======  -->