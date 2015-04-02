<?php

/*
Template Name: homepage
*/

get_header(); ?>
		<section class="hero">
			<div class="scroll-down">
				<!-- <img src="<?php bloginfo(template_url);?>/img/arrow-down.png" alt=""> -->
				<div><img src="<?php bloginfo(template_url);?>/img/scroll-arrow.svg" alt=""> </div><p>Reviews</p>
			</div>


			<!-- Vertically centered lockup -->
			<div class="wrapper" id="hero-title">
				<div class="logo">
					<div class="awards">
						<div class="awards-logo">
							<img src="<?php bloginfo(template_url);?>/img/Berlinale_logo.svg" alt="">
						</div>
						<p>Berlinale 2015 Winner Amnesty </br>Human Rights Award Winner Audience Choice Award </p>
					</div>


					<span class="mask"><h1 class="page-load-element">TELL SPRING NOT TO</h1></span>
					<span class="mask"><h1 class="page-load-element">COME THIS YEAR</h1></span> 


					<div class="langauge-logo">
						<img src="<?php bloginfo(template_url);?>/img/lanuage-logo.svg" alt="">
					</div>
				</div><!-- / LOGO -->

			</div><!-- // Vertically centered lockup -->

			<div id="container" class="container">
				<ul id="scene" class="scene">
					<li class="layer" data-depth="1.00">
						<div class="background-images" style="background-image: url('<?php bloginfo(template_url);?>/img/cut-out-background.jpg');"></div>
					</li>
					<li class="layer manning" data-depth="0.60">
						<div class="background-images" style="background-image: url('<?php bloginfo(template_url);?>/img/cut-out-man.png');"></div>
					</li>
					<li class="layer manning" data-depth="2.00">
						<div class="background-images" style="background-image: url('<?php bloginfo(template_url);?>/img/cut-out-tree.png');"></div>
					</li>
  					
  					<li class="layer" data-depth="0.40"><img src=""></li>
  					<li class="layer" data-depth="0.60"><img src=""></li>



					<!-- <li class="layer" data-depth="0.80"><img src="<?php bloginfo(template_url);?>/img/"></li>
					<li class="layer" data-depth="0.60"><img src="<?php bloginfo(template_url);?>/img/"></li> -->
				</ul>
			</div>
		
		</section>


		<section id="reviews">
			<div class="review__container">
				<ul class="bx-slider">


					<?php $reviews = new WP_Query( array(
						'post_type' => 'reviews')); ?>

					<?php while ($reviews->have_posts() ) : $reviews->the_post(); ?>

					<li class="hero-slider">

						<div class="wrapper">
							<!-- <div class="review-icon">
								<img src="./img/reviews_4stars.png" alt="">
							</div> -->
						
							<blockquote>
								<?php the_field ('review')?>
							</blockquote>

							<cite><?php the_field ('review_name')?></cite>
						</div><!-- //wrapper-->
					</li>

					<?php endwhile; ?>

				</ul>
			</div>
		</section>

		<section id="billing-block">
			<div class="wrapper">
				<img src="<?php bloginfo(template_url);?>/img/billing-block.png" alt="">
			</div>

			<div class="film-company-logos">
				<ul>
					<li><a href=""><img src="<?php bloginfo(template_url);?>/img/ponda_logo.svg" alt=""></a></li>
					<li><a href=""><img src="<?php bloginfo(template_url);?>/img/ponda_logo.svg" alt=""></a></li>
					<li><a href=""><img src="<?php bloginfo(template_url);?>/img/ponda_logo.svg" alt=""></a></li>
				</ul>
			</div>
		</section>

<?php get_footer(); ?>


