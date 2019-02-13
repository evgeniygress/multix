<!-- ====== START ABOUT ======  -->
		<section class="sections about" id="about" data-scroll-index="2">
			<div class="container">
				<div class="row">
					<!-- START ABOUT PICTURE -->
					<div class="col-lg-4 col-md-5 ab-pic">
						<img src="<?php the_field('about-img', 'option'); ?>" style="width: 100%;" alt="About picture" />
					</div>
					<!-- END ABOUT PICTURE -->

					<!-- START ABOUT CONTENT -->
					<div class="col-lg-8 col-md-7 ab-cont">

						<h3><?php the_field('about-title-text1', 'option'); ?> <span><?php the_field('about-title-strong1', 'option'); ?></span> <?php the_field('about-title-text2', 'option'); ?> <span><?php the_field('about-title-strong2', 'option'); ?></span></h3>
						<p><?php the_field('about-text-first', 'option'); ?></p>
						<p><?php the_field('about-text-second', 'option'); ?></p>
						<div class="features">
							<p>
								<span class="icon icon-map"></span>
								<?php the_field('about-icon-text1', 'option'); ?>
							</p>
							<p>
								<span class="icon icon-linegraph"></span>
								<?php the_field('about-icon-text2', 'option'); ?>
							</p>
							<p>
								<span class="icon icon-heart"></span>
								<?php the_field('about-icon-text3', 'option'); ?>
							</p>
						</div>
					</div>
					<!-- END ABOUT CONTENT -->
				</div>
			</div>
		</section>
		<!-- ====== END ABOUT ======  -->