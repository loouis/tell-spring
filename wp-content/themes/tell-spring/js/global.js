jQuery(document).ready(function($){

	//init
	$('section#video-lightbox .wrapper').fitVids();
	//svg fallback
	svgeezy.init(false, 'png');

	$(window).resize(function() {
      $('section.hero, .background-images, .manning').height($(window).height() -0);
    });
    $(window).trigger('resize');

    //bxslider
	$('.bx-slider').bxSlider({
		auto: true,
		mode: 'horizontal',
		pause: 7000,

		// nextSelector: '#slider-next',
		// prevSelector: '#slider-prev',
		// nextText: 'Onward →',
		// prevText: '← Go back'

	});

	//Parallax
	$('#scene').parallax({
	  calibrateX: true,
	  calibrateY: true,
	  invertX: true,
	  invertY: true,
	  limitX: true,
	  limitY: 10,
	  scalarX: 2,
	  scalarY: 8,
	  frictionX: 0.2,
	  frictionY: 0.8,
	  originX: 1.0,
	  originY: 1.0
	});





	//animate text on page load
	var spanMask = $('span.mask');
		slideDownElement = $('.page-load-element');

	$('body').delay(2000).addClass('page-load-animate');


		

	//scroll down
	$('.scroll-down').click(function(){
		$('html,body').animate({
			scrollTop: $('section#reviews').offset().top -1}, "slow");
	});

	//center video in lightbox maths and style
	function centerLightbox (){
		//Variables for lightbox
		var lightbox = $('section#video-lightbox');
		var lightBoxHeight = $('section#video-lightbox').height();
		var videoContainer = $('section#video-lightbox .wrapper');
		var videoContainerHeight = videoContainer.height();

		//Margintop: lightbox height - video height / 2
		videoContainer.css('margin-top', - (videoContainerHeight - lightBoxHeight) / 2);

		lightbox.fitVids();
	}


	// //video lightbox
	$('#video-button').click(function(){

		$('section.hero').addClass("lights-out");

		$('section#video-lightbox').delay(1400).fadeIn(1000);
		$('body').addClass("no-scroll");
		setTimeout(centerLightbox, 1400);

		$('body').removeClass('page-load-animate');




		$(window).on('resize', function(){
			centerLightbox();

		}).resize();
	});



	// global vars
	var winHeight = $(window).height();

	fullscreen();
	$(window).resize(fullscreen);

	function fullscreen() {
		var masthead = $('.masthead');
		var fullVideo = $('.video-container');
		var windowH = $(window).height();
		var windowW = $(window).width();

		masthead.width(windowW);
		masthead.height(windowH -120);
	}


	function VerticallyCenterHero(){
		var hero = $('section.hero');
			heroTitle = $('#hero-title');

			heroHeight = hero.height();
			heroTitleHeight = heroTitle.height();

		heroTitle.css('margin-top', ((heroHeight - heroTitleHeight) / 2 ) - 45);
	}

	VerticallyCenterHero();

	$(window).on('resize', function(){
		VerticallyCenterHero();
	}).resize();

	$('button.close-lightbox').click(function(){
		$('section#video-lightbox').fadeOut(1400);
		$('body').removeClass("no-scroll");
		$('section.hero').removeClass("lights-out");
		$('body').addClass('page-load-animate');
	});


	 //Close lightbox with escape key
	  $(document).keyup(function(e) { 
	    if (e.keyCode === 27) { 
	      $('body').removeClass("no-scroll");
	      $('#video-lightbox').fadeOut();
	    } // esc key
	  });


	//Arrow animation in hero
	var scrollArrow = $('.scroll-down div img');

	var acrollArrowAnimate = setInterval(function(){
		scrollArrow.toggleClass("arrow-down-animation");
	}, 700);






});
