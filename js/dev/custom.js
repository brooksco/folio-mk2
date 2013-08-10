// @codekit-prepend "jquery-1.10.2.js"
// @codekit-prepend "jquery.scrollTo-1.4.3.1.js"
// @codekit-prepend "jquery.localscroll-1.2.7.js"
// @codekit-prepend "enquire.js"
// @codekit-prepend "waypoints.js"
// @codekit-prepend "lightbox-2.6.min.js"

// Once the page has loaded...
$(document).ready(function() {

	// Check if the current screen is less than 700px, where current column size starts looking bad
	enquire.register("screen and (max-width:700px)", {

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

		}).listen();

	// On thumbnail click
	$('.photo-thumb').click(function() {

		$('#photography-unit').css("background-image", "url(img/" + $(this).data("photo") + ")" );

	});


}); // End ready