<!-- ====== START FACTS ======  -->
		<section class="sections facts">
			<div class="container">
				<div class="row">


					<!-- START FACTS TITLE -->
					<div class="facts-title col-md-8">
						<h3><span><?php the_field('facts-title-strong1', 'option'); ?></span> <?php the_field('facts-title-text1', 'option'); ?> <span><?php the_field('facts-title-strong2', 'option'); ?></span> <?php the_field('facts-title-text2', 'option'); ?></h3>
						<p><?php the_field('facts-text', 'option'); ?></p>
					</div>
					<!-- END FACTS TITLE -->


					<!-- START FACTS CONTENT -->
					<div class="facts-c col-md-12">
					<?php
					if( have_rows('facts-item', 'option') ):
				    	while ( have_rows('facts-item', 'option') ) : the_row();
					?>
					<!-- FUN FACTS ITEM -->
					<div class="fact-item col-md-3">
						<div class="counting-icon">
	                    </div>
	                    <!-- NUMBER -->
	                    <span class="count" data-from="0" data-to="<?php the_sub_field('facts-count'); ?>">0</span>
	                    <!-- TITLE -->
	                    <h4><?php the_sub_field('facts-count-title'); ?></h4>
					</div>
					<?php
						endwhile;
					endif;
					?>
					</div>
					<!-- END FACTS CONTENT -->

				</div>
			</div>
		</section>
		<!-- ====== END FACTS ======  -->