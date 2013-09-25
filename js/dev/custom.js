// @codekit-prepend "jquery-1.10.2.js"
// @codekit-prepend "jquery.scrollTo-1.4.3.1.js"
// @codekit-prepend "jquery.localscroll-1.2.7.js"
// @codekit-prepend "enquire.js"
// @codekit-prepend "waypoints.js"
// @codekit-prepend "lightbox-2.6.min.js"

// Once the page has loaded...
$(document).ready(function() {

	// Setup the local scrolling effect, relies on jQuery ScrollTo
	$('#main-header, #scroll-main-header').localScroll({duration:800, offset: -50});

	// On thumbnail click
	$('.photo-thumb').click(function() {

		$('#photography-unit').css("background-image", "url(img/" + $(this).data("photo") + ")" );

	});

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

	// Check if the current screen is less than 700px, where current column size starts looking bad
	enquire
	.register("screen and (max-width:700px)", {

			// If it is, change the text to a single column
			match : function() {
				$('.two-column').removeClass('text-cols--2');

				$('.four-column').removeClass('text-cols--4');
				$('.four-column').addClass('text-cols--2');
		    },      // REQUIRED

		    // If it no longer is, change the text back to 2 columns
		    unmatch : function() {
		    	$('.two-column').addClass('text-cols--2');

		    	$('.four-column').removeClass('text-cols--2');
		    	$('.four-column').addClass('text-cols--4');
		    }, 

		})
	.register("screen and (min-width:481px)", {

		// If it is, fade in the fixed navbar.
		// If it isn't, fade it out if it's there.
		match : function() {

			$('#me-content').waypoint(function(direction) {
				if(direction == 'down') {
					$('#scroll-header').fadeIn();
				} else {
					$('#scroll-header').fadeOut();
				}

			}, { offset: 150 });

		},

	}); // End enquire

}); // End ready