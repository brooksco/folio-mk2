<script type="text/javascript">

// Once the page has loaded...
$(document).ready(function() {

	// Setup the local scrolling effect, relies on jQuery ScrollTo
	$('#main-header, #scroll-main-header').localScroll({duration:800, offset: -50});

	// Check if the current screen is greater than 480px
	enquire.register("screen and (min-width:481px)", {

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

    },     // REQUIRED

}).listen();


}); // End ready
</script>

<!-- Setup the grid -->
<div class="grid">

	<!-- id the header and setup the proper margins -->
	<div id="main-header" class="margin-five">
		<div class="grid__item four-tenths palm-one-whole">

			<!-- Main name link -->
			<a class="name-link" href="/">
				<h3 class="name">Colin Brooks</h3>
			</a>

		</div><div class="grid__item six-tenths palm-one-whole">

		<!-- Main navbar -->
		<nav id="navbar" class="nav  nav--block nav--banner">
			<li><a href="#anchor-two">Projects</a></li>
			<li><a href="#anchor-three">Photography</a></li>
			<li><a href="#anchor-four">Contact</a></li>
		</nav>

	</div>
</div>

</div>
<!-- End the main header -->

<!-- Header that scrolls in down the page on larger form factors -->
<div id="scroll-header">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- id the header and setup the proper margins -->
		<div id="scroll-main-header" class="margin-five">
			<div class="grid__item four-tenths palm-one-whole">

				<!-- Insert the CB/design logo, use as return link -->
				<a href="#anchor-zero" class="name-link">
					<!-- <img src="img/cb_1_777_200.png" class="logo"> -->
					<h3 class="name">Colin Brooks</h3>
				</a>
				
			</div><div class="grid__item six-tenths palm-one-whole">

			<!-- Scrolling navbar links, now including the about me section -->
			<nav id="scroll-navbar" class="nav  nav--block nav--banner">
				<li><a href="#anchor-one">About</a></li>
				<li><a href="#anchor-two">Projects</a></li>
				<li><a href="#anchor-three">Photography</a></li>
				<li><a href="#anchor-four">Contact</a></li>
			</nav>

		</div>
	</div>


</div>

</div>
<!-- End the scrolling header -->