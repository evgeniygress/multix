<?php
/*
Template Name: price
Template Post Type: price
*/
?>
<!-- ====== START PRICES ======  -->
		<section class="sections prices" id="price" data-scroll-index="4">
			<div class="container">
				<div class="row">


					<!-- START PRICE TITLE -->
					<div class="price-title col-md-4">
						<?php
						if( have_rows('price-title-text', 'option') ):
					    	while ( have_rows('price-title-text', 'option') ) : the_row();
						?>
						<h3><?php the_sub_field('price-title1'); ?> <span><?php the_sub_field('price-title2'); ?></span> <?php the_sub_field('price-title3'); ?> <span><?php the_sub_field('price-title4'); ?></span> <?php the_sub_field('price-title5'); ?></h3>
						<?php
							endwhile;
						endif;
						?>
						

						<!-- START PRICING TABLES TABS -->
						<div class="pricing-tabs">
							<ul class="price-tabs" role="tablist">

							<?php
								$terms = get_terms( array(
									'taxonomy'      => array( 'price', 'price' ), // название таксономии с WP 4.5
									'orderby'       => 'id', 
									'order'         => 'ASC',
									'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
								) );


								foreach( $terms as $term ){
									?>
									

								<li role="presentation">
							    	<a href="<?php print_r($term->slug); ?>" aria-controls="<?php print_r($term->name); ?>" role="tab" data-toggle="tab">
							    		<?php print_r($term->name); ?>
							    	</a>
								</li>
                                <?php
								}
                                ?>
							</ul>
						</div>
						<!-- END PRICING TABLES TABS -->

					</div>
					<!-- END PRICE TITLE -->


					<!-- START PRICING TABLES -->
					<div class="pric-tables col-md-8">
					
						<!-- START PRICING TABLES CONTENT -->
						<div class="tab-content">
						<?php

						$posts = get_posts(array(
							'numberposts' => 3,
							'post_type' => 'price',
							'order'       => 'ASC',
							'suppress_filters' => true,
						));
						foreach( $posts as $post ){
							setup_postdata($post); ?>
							
								<?php 

									$post_categories = get_the_terms( $post->ID, 'price' );
									if ( ! empty( $post_categories ) && ! is_wp_error( $post_categories ) ) {
									    $categories = wp_list_pluck( $post_categories, 'slug' );
									}
									// parent loop
									if( have_rows('price') ):

									    while( have_rows('price') ) : the_row();
									    	?>


											<!-- START PERSONAL PRICING TABLES -->
											<div role="tabpanel" class="tab-pane fade" id="<?php print_r($categories[0]); ?>">	
												<?php 
													
												// child loop
												if( have_rows('price-content') ): ?>
												
												    <?php while( have_rows('price-content') ) : the_row(); ?>
													<div class="price-table col-md-6">

														<div class="item text-center">
															<div class="type">
																<h5><?php the_sub_field('price-title') ?></h5>
															</div>
															<div class="mount">
																<h3><?php the_sub_field('price-sale') ?><span><?php the_sub_field('price-date') ?></span></h3>
															</div>	
													<?php 
													
														// child-child loop
														if( have_rows('price-info') ): ?>
														
														    <?php while( have_rows('price-info') ) : the_row(); ?>
															
															<div class="pfeat">
																<p><i class="fa <?php the_sub_field('price-icon') ?>"></i> <?php the_sub_field('price-description') ?></p>
															</div>	
																
															<?php endwhile; ?>
														
														<?php endif;
														// end child-child loop
														
														?>
															<div class="order">
																<a href="index.html#">
																	<?php the_sub_field('price-order') ?>
																</a>
															</div>
														</div>

													</div>
													<?php endwhile; ?>
												
												<?php endif;
												// end child loop
												
												?>
												
											</div>
											<!-- END PRICING TABLES CONTENT -->
											<?php		
											
									    endwhile;

									endif;
									// end parent loop

									?>	
						   <?php
						}

						wp_reset_postdata();

						?>

					</div>
					<!-- END PRICING TABLES -->

				</div>
			</div>
		</section>
		<!-- ====== END PRICES ======  -->