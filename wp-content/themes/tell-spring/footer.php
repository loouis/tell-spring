
		<footer>
			<div class="wrapper">
				<p style="color:white;"> &copy;2015 <?php bloginfo('name'); ?></p>
			</div>
		</footer>

		<div class="background-images">
			<div class="overlay"></div>
		</div>


		<section id="video-lightbox">
			<button class="close-lightbox"></button>

			<div class="close-lightbox-container"></div>

			<div class="wrapper">
				<iframe src="https://player.vimeo.com/video/115809611?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</section>

		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
		<script src="<?php bloginfo(template_url);?>/js/libs/query.js"></script>
		<script src="<?php bloginfo(template_url);?>/js/libs/bxslider.min.js"></script>
		<script src="<?php bloginfo(template_url);?>/js/libs/fitvids.js"></script>
		<script src="<?php bloginfo(template_url);?>/js/libs/svgeezy.js"></script>
		<script src="<?php bloginfo(template_url);?>/js/libs/videos.js"></script>
		<script src="<?php bloginfo(template_url);?>/js/global.js"></script>


		<!-- Call CoverVid -->
		<script type="text/javascript">
			// If using jQuery
				// $('.masthead-video').coverVid(1920, 1080);
			// If not using jQuery (Native Javascript)
				coverVid(document.querySelector('.masthead-video'), 1920, 1080);
		</script>

	</body>
</html>