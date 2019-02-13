<!-- ====== START EXPERIENCES ======  -->
		<section class="sections experiences">
			<div class="container">
				<div class="row">


					<!-- START EXPERIENCES LEFT SIDE -->
					<div class="col-md-5 exp-lf">
						<h3><?php the_field('exp-title-text1', 'option'); ?> <span><?php the_field('exp-title-strong1', 'option'); ?></span><?php the_field('exp-title-text2', 'option'); ?> <span><?php the_field('exp-title-strong2', 'option'); ?></span></h3>
						<p><?php the_field('experiences-text', 'option'); ?></p>
					</div>
					<!-- END EXPERIENCES LEFT SIDE -->


					<!-- START SKILLS -->
                	<div class="skills col-md-7">

						<ul>
							<li>
								<span><?php the_field('skills-branding', 'option'); ?></span>
								<div class="progress">
									<div class="progress-bar" data-percent="95" style="width: <?php the_field('skills-branding-progress', 'option'); ?>%;">
					                    <span><?php the_field('skills-branding-progress', 'option'); ?>%</span>
					                 </div>
				                 </div>
							</li>
							<li>
								<span><?php the_field('skills-web', 'option'); ?></span>
								<div class="progress">
									<div class="progress-bar" data-percent="90" style="width: <?php the_field('skills-web-progress', 'option'); ?>%;">
					                    <span><?php the_field('skills-web-progress', 'option'); ?>%</span>
					                 </div>
				                 </div>
							</li>
							<li>
								<span><?php the_field('skills-graphic', 'option'); ?></span>
								<div class="progress">
									<div class="progress-bar" data-percent="65" style="width: <?php the_field('skills-graphic-progress', 'option'); ?>%;">
					                    <span><?php the_field('skills-graphic-progress', 'option'); ?>%</span>
					                 </div>s
				                 </div>
							</li>
							<li>
								<span><?php the_field('skills-development', 'option'); ?></span>
								<div class="progress">
									<div class="progress-bar" data-percent="35" style="width: <?php the_field('skills-development-progress', 'option'); ?>%;">
					                    <span><?php the_field('skills-development-progress', 'option'); ?>%</span>
					                 </div>
				                 </div>
							</li>
						</ul>

	                </div>
	                <!-- END SKILLS -->

				</div>
			</div>
		</section>
		<!-- ====== END EXPERIENCES ======  -->