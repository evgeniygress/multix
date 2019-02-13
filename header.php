<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- TITLE -->
		<title><?php the_title(); ?></title>



	<?php wp_head(); ?>
	</head>
	<body>

		<!-- ====== Preloader ======  -->
	    <div class="loading">
			<div class="load-circle">
			</div>
		</div>
		<!-- ======End Preloader ======  -->
		<?php 

		$headerBg = get_field('bg-header', 'option');
		$lengthBg = count($headerBg) - 1;
		$randomBg = rand(0, $lengthBg);
		$imgBg = $headerBg[$randomBg]['url'];
		?>
		<!-- ====== HEADER START ======  -->
		<section class="s-header" id="home" data-scroll-index="0" style="background-image: url(<?php print($imgBg); ?>)">
			<div class="header-overlay">


				<!-- ====== NAVGITION ======  -->
				<nav class="navbar land-nav">
					<div class="container">
						<div class="row">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<!-- logo -->
								<a class="logo navbar-brand" href="index.html#home" data-scroll-nav="0">

									<!-- WHITE LOGO -->
									<img class="white-logo" width="200" src="<?php the_field('white-logo', 'option'); ?>" alt="logo" />

									<!-- DARK LOGO -->
									<img class="dark-logo" width="200" src="<?php the_field('dark-logo', 'option'); ?>" alt="logo" />

								</a>
							</div>

							<!-- Collect the nav links, and other content for toggling -->
							<div class="collapse navbar-collapse" id="collapse">

							<?php if ( has_nav_menu('header-nav') ) wp_nav_menu( array('theme_location' => 'header-nav', 'menu_class' => 'nav navbar-nav navbar-right')); ?>
							</div><!-- /.navbar-collapse -->
						</div>
					</div><!-- /.container -->
				</nav>
				<!-- ====== END NAVGITION ======  -->


				<!-- ====== START HEADER CONTENT ======  -->
				<div class="middle-c text-center">
					<div class="container">
						<div class="row">
							<div class="capt col-md-8 col-sm-11">

						    	<h1><?php the_field('first-text', 'option'); ?> <span><?php the_field('strong-text1', 'option'); ?></span> <?php the_field('second-text', 'option'); ?> <span><?php the_field('strong-text2', 'option'); ?></span></h1>								  
								<a href="index.html#about" data-scroll-nav="2" class="cta-btn">
									<?php the_field('scroll-text', 'option'); ?>
								</a>

							</div>
						</div>
					</div>
				</div>
				<!-- ====== END HEADER CONTENT ======  -->


				<div class="header-shap">
	                <img src="<?php the_field('shap-img', 'option'); ?>" alt="Shape">
	            </div>


			</div>
		</section>
		<!-- ====== END HEADER ======  -->