<?php

/*
Template Name: homepage
*/

get_header(); ?>
		<section class="hero">
			<div class="scroll-down">
				<img src="<?php bloginfo(template_url);?>/img/arrow-down.png" alt="">
			</div>
			<div class="wrapper">
				<div class="logo">
					<img src="<?php bloginfo(template_url);?>/img/logo.png" alt="">
				</div>

				<div class="center-play-button" id="video-button">
					<div class="play-button-container">
						<img src="<?php bloginfo(template_url);?>/img/play-button.png" alt="">
					</div>
				</div>

			</div>

		</section>



		<section id="reviews">
			<div class="review__container">
				<h4>What they say</h4>

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
		</section>



<?php get_footer(); ?>


