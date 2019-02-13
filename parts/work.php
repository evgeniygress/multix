<!-- ====== START WORK ======  -->
		<section class="sections text-center work" id="work" data-scroll-index="3">
			<div class="container">
				<div class="row">


					<!-- START WORK TITLE -->
					<div class="col-md-9 wo-title">
						<h2><?php the_field('work-title-text1', 'option'); ?> <span><?php the_field('work-title-strong1', 'option'); ?></span> <?php the_field('work-title-text2', 'option'); ?> <span><?php the_field('work-title-strong2', 'option'); ?></span></h2>
						<p><?php the_field('work-text', 'option'); ?></p>
					</div>
					<!-- END WORK TITLE -->


					<!-- WORK FILTER BUTTONS -->
					<div class="button-group filter-work">
						<a class="button is-checked" data-filter="*">All</a>
					<?php 
						$terms = get_terms('work-category');
						if ( $terms && ! is_wp_error($terms) ) {
							foreach ($terms as $term) {
								$my_term = $term->description;
								$term_name = $term->name;
								?>
								<a class="button " data-filter=".item-<?php print($term_name); ?>"><?php print($my_term); ?></a>
								<?php
							}
						}
					?>

					  

					</div>
					<!-- END WORK FILTER BUTTONS -->

				</div>
			</div>


			<!-- WORK CONTENT START -->
			<div class="work-content">
	            <?php
	            $posts = get_posts( array(
	                'numberposts' => 0,
	                'post_type'   => 'work',
	                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	            ) );

	            foreach( $posts as $post ){
	                setup_postdata($post);
	                ?>
				<!-- WORK ITEM -->
				<div class="work-item item-<?php
	                $term_list = wp_get_post_terms( get_the_ID(), 'work-category', array('fields' => 'names') );
	                for ($i = 0; $i <= count($term_list); $i++)
                        {
                            print $term_list[$i]." ";
                        }
	                ?>">
					<div class="work-caption">

						<!-- WORK IMAGE -->
				  		<?php the_post_thumbnail(); ?>

				  		<!-- WORK TITLE -->
					  	<div class="overlay">
					  		<div class="info-content">
						  		<h4><?php the_title(); ?></h4>
						  		<p><?php the_content(); ?></p>
							</div>
							<div class="know-more">
								<a class="modal-image" href="<?php the_post_thumbnail_url(); ?>">
									<span class="icon icon-focus"></span>
								</a>
							</div>
					  	</div>

					</div>
				</div>	
	            <?php
	            }

	            wp_reset_postdata(); // сброс
	            ?>

			</div>
			<!-- WORK CONTENT END -->


		</section>
		<!-- ====== END WORK ======  -->