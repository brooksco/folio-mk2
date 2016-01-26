// @codekit-prepend "jquery-2.1.3.js"
// @codekit-prepend "jquery.scrollTo-1.4.3.1.js"
// @codekit-prepend "jquery.localscroll-1.2.7.js"
// @codekit-prepend "enquire.js"
// @codekit-prepend "waypoints.js"
// @codekit-prepend "lightbox-2.7.min.js"

$(document).ready(function() {

	// Use the window height to set the hero unit height/text margin
	var windowheight = $(window).height();
	var windowwidth	= $(window).width();
	var heromargin = (windowheight/2) - 100;
	var arrowmargin = (windowheight/2) +80;

	// Adjusts for small screens in landscape
	if (windowheight < 350) {
		heromargin += 40;
		arrowmargin -= 35;
	}

	$('#hero-unit').css({'height': windowheight}); 
	$('#hero-text').css({'top': heromargin});
	$('#scroll-arrow').css({'top': arrowmargin});

	// Hide it at first, then fade it in nicely
	$('#scroll-arrow, #main-header').hide();
	$('#scroll-arrow, #main-header').delay(1400).fadeIn(2400);


	// Setup the local scrolling effect, relies on jQuery ScrollTo
	$('#main-header, #scroll-main-header, #palm-header').localScroll({duration:800, offset: -52});


	// Fade in/out for dropdown in navbar. CSS transitions don't work on 'display'
	$('#navbar > li > ul').css({'display': 'block', 'position': 'absolute'}).hide();

	$('#navbar > li').has('ul').hover(function () {
		$('#navbar > li > ul').fadeToggle(150);
	});

	// Do it for the scrolling navbar too. There might be a cleaner way to do this.
	$('#scroll-navbar > li > ul').css({'display': 'block', 'position': 'absolute'}).hide();

	$('#scroll-navbar > li').has('ul').hover(function () {
		$('#scroll-navbar > li > ul').fadeToggle(150);
	});


	// If the screen is less than 700px wide
	enquire
	.register("screen and (max-width:700px)", {

			// If it is, change the text to a single column
			match : function() {
				$('.two-column').removeClass('text-cols--2');

				$('.four-column').removeClass('text-cols--4');
				$('.four-column').addClass('text-cols--2');


				//  Setup the image lightbox for small screens
				$('.photo-thumb').each(function() {
					var filename = $(this).data('photo');
					var title = $(this).attr('alt');
					$(this).wrap( '<a href="img/' + filename + '" title="' + title + '" data-lightbox="photothumbs"></a>' );
				});


				$('#me-content').waypoint(function(direction) {
					if (direction == 'down') {
						$('#palm-header').fadeIn();
					} else {
						$('#palm-header').fadeOut();
					}
				}, { offset: 150 });


		    },      // REQUIRED

		    // If it no longer is, change the text back to 2 columns
		    unmatch : function() {
		    	$('.two-column').addClass('text-cols--2');

		    	$('.four-column').removeClass('text-cols--2');
		    	$('.four-column').addClass('text-cols--4');

		    	//  Reove the image lightbox for small screens
		    	$('.photo-thumb').unwrap();
		    }

		})

	.register("screen and (min-width:700px)", {

		match : function() {
			// On thumbnail click
			$('.photo-thumb').click(function() {
				$('#photography-unit').css("background-image", "url(img/" + $(this).data("photo") + ")" );
			});

			$('#palm-header').hide();

			$('#me-content').waypoint(function(direction) {

				if (direction == 'down') {
					$('#scroll-header').fadeIn();
				} else {
					$('#scroll-header').fadeOut();
				}

			}, { offset: 150 });

			}, // REQUIRED

		unmatch : function() {
			$('.photo-thumb').off('click');
		}

	}); // END ENQUIRE


}); // End ready