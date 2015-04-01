jQuery(document).ready(function($){

	//init
	$('section#video-lightbox .wrapper').fitVids();

	$(window).resize(function() {
      $('section.hero, .background-images, section#reviews').height($(window).height() - 0);
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

	//animated arrow

	// var scrollDown = $('.scroll-down');

	// if ($(window).width() < 400) {
	// 		clearInterval(Arrow);
	// 	}
	// 	else {
	// 		var Arrow = setInterval(function(){
	// 			scrollDown.toggleClass("animateArrow");
	// 	}, 1000);

	// }
		

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
		$('section#video-lightbox').fadeIn();
		$('body').addClass("no-scroll");
		centerLightbox();

		$(window).on('resize', function(){
			centerLightbox();

		}).resize();
	});

	$('button.close-lightbox').click(function(){
		$('section#video-lightbox').fadeOut();
		$('body').removeClass("no-scroll");
	});


	 //Close lightbox with escape key
	  $(document).keyup(function(e) { 
	    if (e.keyCode === 27) { 
	      $('body').removeClass("no-scroll");
	      $('#video-lightbox').fadeOut();
	    } // esc key
	  });





	//Hero play video button
	//play button animation
	// var outerRing = $('.outer-ring');
	// var outerRingTwo = $('.outer-ring-two');
	// var playScale = $('.playscale');

 //    var animatePlayButton = setInterval(function(){
 //    	outerRing.toggleClass("playscale");
 //    	outerRingTwo.delay(800).toggleClass("playscale-two");
 //    }, 2500);







});
