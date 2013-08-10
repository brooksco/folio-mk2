<!DOCTYPE html>
<html>
<head>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">

	<title>Colin Brooks</title>

	<link rel="stylesheet" href="css/style.css">
	<script src="js/custom-min.js" type="text/javascript"></script>


	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-41574595-1', 'colinbrooks.us');
	ga('send', 'pageview');

	</script>
	<!-- End Google Analytics -->

</head>
<body>







	<!-- Header -->
	<?php include 'header.php'; ?>
	<!-- End Header -->


	<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: colinbrooks.us'; 
	$to = 'colinbookst@gmail.com'; 
	$subject = 'Hello';
	$human = $_POST['human'];

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	if ($_POST['submit']) {
		if ($name != '' && $email != '') {
			if ($human == '4') {				 
				if (mail ($to, $subject, $body, $from)) { 
					echo '<p class="contact-success">Your message has been sent!</p>';
				} else { 
					echo '<p class="contact-failure"><a href="#anchor-four">Something went wrong, go back and try again!</a></p>'; 
				} 
			} else if ($_POST['submit'] && $human != '7') {
				echo '<p class="contact-failure"><a href="#anchor-four">You answered the anti-spam question incorrectly!</a></p>';
			}
		} else {
			echo '<p class="contact-failure"><a href="#anchor-four">You need to fill in all required fields!!</a></p>';
		}
	}
	?>


<!-- Hero unit, with anchor point zero -->
<section name="anchor-zero" id="hero-unit">

	<!-- Setup the grid -->
	<div class="grid">
		<div class="grid__item one-third palm-one-whole">
		</div><div class="grid__item two-thirds palm-one-whole">
		<p id="hero-text">
			My name is Colin Brooks, and I like to make things.
		</p>
	</div>
</div>
<!-- End of the hero unit, and anchor zero -->
</section>

<!-- About me info, with anchor point one -->
<section id="anchor-one" name="anchor-one">
	<!-- Setup the grid -->
	<div class="grid">
		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<!-- Floating image of me, set to one quarter of the grid -->
				<div class="grid__item one-quarter">

					<div id="me-image">
						<img src="img/swirl_arrow_400.jpg" class="img--left">
					</div>

				</div><div class="grid__item three-quarters">

				<div id="me-content">	
					<h1 class="clean-header">About Me</h1>

					<!-- Two column text format -->
					<!-- class="text-cols--2" -->
					<p>
						
						I'm originally from Seattle, WA, and on the verge of
						moving to Wellington, NZ for an indeterminate amout of
						time. I just graduated this May from Grinnell College
						with a degree in General Science: Computer Science,
						and a concentration in Neuroscience. I've spent my
						summers working with at-risk youth, doing art in the
						park with kids in Iowa, and building websites for
						community non-profits.

					</p>

					<p>

						I like photography, working with kids, being outside, really cold water, and trying to make things I don't know how to make.

					</p>

				</div>
			</div>
		</div>
	</div>
	<!-- End of about me info, anchor one -->
</section>

<!-- Web work portfolio, with anchor point two -->
<section id="anchor-two" name="anchor-two" class="gray">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<h1 id="projects-header" class="clean-header">Projects & Experience</h1>
				<div class="grid__item">
					<!-- <p>
						<em class="quote">

							"No sensible decision can be made any longer
							"without taking into account not only the world as
							"it is, but the world as it will be." - Isaac
							"Asimov
						
						</em>
					</p> -->		
					

				</div><div class="grid__item project">
<!-- <a href="img/project/project-localfoods-inventory.jpg" data-lightbox="roadtrip">image #2</a> -->
				<div class="project-image-wrapper">
					<a href="img/project/project-localfoods-inventory.jpg" 
						data-lightbox="localfoods" 
						title="A major goal of the project was to make viewing/managing inventory much more pleasant, and with a greater focus on images.">
						<img src="img/project/project-localfoods-inventory.jpg" class="project-image">
					</a>
					<a href="img/project/project-localfoods-cart.jpg" 
						data-lightbox="localfoods" 
						title="By using a modals instead of a links whenever possible, users would no longer lose their place and be bumped to another page.">
						<img src="img/project/project-localfoods-cart.jpg" class="project-image" data-lightbox="localfoods" title="blah">
					</a>
					<a href="img/project/project-localfoods-stock.jpg" 
						data-lightbox="localfoods" 
						title="To make the site more personal and colorful, I took new photos for headers and other sections.">
						<img src="img/project/project-localfoods-stock.jpg" class="project-image">
					</a>
					<a href="img/project/project-localfoods-mobile.jpg" 
						data-lightbox="localfoods" 
						title="I made sure every aspect of the site was mobile and tablet friendly, and fully responsive.">
						<img src="img/project/project-localfoods-mobile.jpg" class="project-image">
					</a>
				</div>


				<h3 class="clean-subheader">Grinnell Localfoods Coop</h3>
				<h4><em>User Interaction Designer, Fall 2012 - Spring 2013</em></h4>
				
				<section class="two-column text-cols--2">
					<p>

						The Grinnell Localfoods Coop needed a new site, and new
						functionality. For producers, managing their inventory on
						the old site was a mess, and for users, buying was an
						exercize in wading through unorganized lists of only semi-
						relevant text, and lacking payment options. Starting from
						scratch a small team of us set out to build something
						better, working with Localfoods coordinators all along the
						way to make sure we were adhering to their needs.

					</p>
					<p>

						The primary goals of the project were to along producers
						to more effectively manage their goods, and for users to
						be able to pay for their purchases online. As the UI guy,
						I was nominally in charge of all front-facing aspects of
						the site. This included the layouts of pages, navigation,
						graphics and photography, cross browser/platform testing,
						user testing, and making the whole thing responsive for
						devices of all sizes.

					</p>
					<p>

						It's all currently being prepped for deployment, but
						you can visit the shakey development server
						temporarily <a
						href="http://fulkerson.cs.grinnell.edu">here</a>.

					</p>

				</section>

		</div><div class="grid__item project">

		<div class="project-image-wrapper">
			<a href="img/project/project-rays-home.jpg" 
						data-lightbox="rays" 
						title="Photos relevant to RAYS now feature prominantly on the home page to help build more emotional connections.">
				<img src="img/project/project-rays-home.jpg" class="project-image">
			</a>
			<a href="img/project/project-rays-kayak.jpg" 
						data-lightbox="rays" 
						title="I photographed RAYS events to fill in documentation gaps, and give them (and me) more high-quality images to work with.">
				<img src="img/project/project-rays-kayak.jpg" class="project-image">
			</a>
			<a href="img/project/project-rays-sparkpage.jpg" 
						data-lightbox="rays" 
						title="A goal for the project was to balance having more information available, but keeping it from being overwhelming. Expandable sections were one solution, and pull quotes another.">
				<img src="img/project/project-rays-sparkpage.jpg" class="project-image">
			</a>
			<a href="img/project/project-rays-headshots.jpg" 
						data-lightbox="rays" 
						title="On the old site staff photos and bios were nonexistant, so I took new headshots on location for those who needed them.">
				<img src="img/project/project-rays-headshots.jpg" class="project-image">
			</a>
		</div>

		<h3 class="clean-subheader">Renton Area Youth & Family Services [Current]</h3>
		<h4><em>Web Designer, May 2013 - Now</em></h4>

		<section class="two-column text-cols--2">
		
		<p>

			The old RAYS site doesn't have a lot of appeal. It had little
			in the way of personalized content that's at all relevant to the
			work they actually <em>do</em>. For an organization that does a large
			portion of its work from referrals, and relies on individual
			donors, this was less than ideal.

		</p>

		<p>

			Starting from scratch, I've been working with RAYS staff to build
			a site filled with both <em>more</em> and more relevant
			descriptions of the work they do and the people they affect.
			Building better emotional connections with visitors to their site
			should allow them to foster more online donations, and become
			better known within the community. To this end I've interviewed
			staff, collected stories of clients, written stories of clients,
			poured through grant applications, and taken photos at events, of
			staff, and around their offices. This is alongside the technical
			aspects of making a site backed by a new content management system
			that's easier for staff to work with, so it can be updated more
			regularly by more people.

		</p>

		<p>

			The new site isn't up yet, but you can see the old one at <a
						href="http://rays.org">rays.org</a>.

		</p>

	</section>

	</div><div class="grid__item project">

	<h1 id="skills-header" class="clean-header">Technical Skills</h1>
		<ul id="skills-list" class="four-column text-cols--4">
			<li>HTML5</li>
			<li>CSS3</li>
			<li>JavaScript</li>
			<li>jQuery</li>
			<li>SASS/SCSS & LESS</li>
			<li>Responsive Design</li>
			<li>PHP</li>
			<li>Ruby on Rails</li>
			<li>mySQL</li>
			<li>Couch CMS</li>
			<li>WordPress</li>
			<li>Git/GitHub</li>
		</ul>

	</div>


</div>
</div>
</div>
<!-- End of web work portfolio, and anchor two -->
</section>


<!-- Photography portfolio, with anchor point three -->
<section id="photography-unit" name="anchor-three">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<div class="grid__item six-tenths lap-four-tenths palm-one-whole">

				</div><div id="photography-text" class="grid__item four-tenths lap-six-tenths palm-one-whole">

				<h1 id="photography-header" class="clean-header">Photography</h1>

				<!-- "When words become unclear, I shall focus with
				<!-- "photographs. When images become inadequate, I shall be
				<!-- "content with silence." - Ansel Adams -->

				<img src="img/square-caleb.jpg" class="photo-thumb flip" data-photo="caleb.jpg">
				<img src="img/square-trees.jpg" class="photo-thumb" data-photo="trees.jpg">
				<img src="img/square-fisher.jpg" class="photo-thumb" data-photo="fisher.jpg">
				<img src="img/square-sami.jpg" class="photo-thumb" data-photo="sami.jpg">
				<img src="img/square-iowa.jpg" class="photo-thumb" data-photo="iowa.jpg">
				<img src="img/square-obama.jpg" class="photo-thumb" data-photo="obama.jpg">
				<!-- <img src="img/square-hug.jpg" class="photo-thumb" data-photo="hug.jpg"> -->
				<!-- <img src="img/square-byeowa.jpg" class="photo-thumb" data-photo="byeowa.jpg"> -->
				
				<p>

					For four years I worked at the
					Grinnell College Darkroom, and managed it for two. I've
					photographed for all kinds of events, and generally just
					like going wherever with a camera and an open attitude.

				</p>

				<h4>Experience</h4>

				<p>
					<ul>
						<li>Digital cameras/equipment</li>
						<li>Film developing/enlarging</li>
						<li>Flashes/basic lighting</li>
						<li>Adobe Photoshop/Lightroom</li>
						<li>Flickr/500px/social media</li>
					</ul>
				</p>

				<h4>Everything</h4>
				<p>

					If you want to see what I've done lately or everything
					larger, my <a
					href="http://www.flickr.com/pandadumpster">Flickr</a> has a lot.

				</p>

			</div>
		</div>
	</div>
</div>
<!-- End of photography portfolio, and anchor three -->
</section>

<!-- Contact form, with anchor point four -->
<section id="anchor-four" name="anchor-four" class="gray">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<div class="grid__item">

					<div id="contact-content">
						<h1 id="contact-header" class="clean-header">Contact Me</h1>
						<p id="contact-text">

							Email me, call me, mail me stuff...whatever floats
							your boat.<br><br>9806
							43rd PL NE, Seattle WA, 98115. 206-999-3131.

						</p>



						<form method="post" action="index.php">
							<li>
								<label class="contact-label">Name</label>
								<input name="name" class="contact-input"/>
							</li>
							<li>
								<label class="contact-label">Email</label>
								<input type="email" name="email" class="contact-input"/>
							</li>
							<li>
								<label class="contact-label">Message</label>
								<textarea name="message" id="contact-message" class="contact-input"></textarea>
							</li>

							<li>
								<label class="contact-label">What is 3 plus 4? (Anti-spam)</label>
								<input name="human" class="contact-input" />
								<li>

									<input class="btn btn--hard" id="contact-submit" name="submit" type="submit" value="Send it">
								</form>


							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End of contact form, and anchor four -->
		</section>











		<!-- Footer -->
		<?php include 'footer.php'; ?>
		<!-- End Footer -->


	</body>
	</html>