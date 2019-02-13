<!-- ====== START SERVICES ======  -->
		<section class="services sections" id="services" data-scroll-index="1">
			<div class="container">
				<div class="row">


					<!-- SERVICES TITLE START -->
					<div class="col-md-5">
						<div class="serv-title">
							<h4><?php the_field('services-title-text1', 'option'); ?> <span><?php the_field('services-title-strong1', 'option'); ?></span> <?php the_field('services-title-text2', 'option'); ?> <span><?php the_field('services-title-strong2', 'option'); ?></span></h4>
						</div>
					</div>
					<!-- SERVICES TITLE END -->


					<!-- SERVICES CONTENT START -->
					<div class="serv-cont col-md-7">
					<?php
					if( have_rows('servic-item', 'option') ):
				    	while ( have_rows('servic-item', 'option') ) : the_row();
					?>
						<!-- SERVICE ITEM -->
						<div class="serv-c col-md-6">
							<div class="serv-item">
								<!-- SERVICE ICON -->
								<div class="serv-icon">
									<span class="icon <?php the_sub_field('servisec-icon-bg'); ?>"></span>
									<span class="icon <?php the_sub_field('servisec-icon'); ?>"></span>
								</div>
								<!-- SERVICE CONTENT -->
								<div class="serv-cont">
									<h3><?php the_sub_field('servic-item-title'); ?></h3>
									<p><?php the_sub_field('servic-item-text'); ?></p>
								</div>
							</div>
						</div>
						<?php
							endwhile;
						endif;
						?>
					</div>
					<!-- SERVICES CONTENT END -->
				</div>
			</div>
		</section>
		<!-- ====== END SERVICES ======  -->