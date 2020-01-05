<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/CSS/index.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<title>Travel Agency</title>
	</head>
	<body>
		<main>
			<section class="intro">
				<header>
					<h1>Logo</h1>
					<nav>
						<div><a href="#about">About Us</a></div>
						<div><a href="./Includes/allski.html">I Want To See All!</a></div>
						<div><a href="./Includes/findski.html">I'm Alredy Pro Dude</a></div>
						<div><a href="#" class="last-a-nav">Book Now!</a></div>
					</nav>
				</header>
				<div class="p-bg">
					<p>live your dream and make your life easy at tha same time</p>
				</div>
				<div class="link-landing">
					<h2><a href="#">Book a Trip</a></h2>
				</div>
			</section>
			<section class="about-us" id="about">
				<div class="up">
					<div class="founder">
						<h2>3</h2>
						<p>Friends that LOVE Ski</p>
					</div>
					<div class="trips">
						<h2 class="count" id="trip">200</h2>
						<p>Trips Booked from us</p>
					</div>
					<div class="clients">
						<h2 class="count">100</h2>
						<p>HAPPY customers</p>
					</div>
				</div>
				<div class="gallery">
					<div class="slideshow-container">
						<div class="mySlides fade">
							<img src="./Includes/images/slide1.jpg" style="width:100%" />
						</div>
						<div class="mySlides fade">
							<img src="./Includes/images/slide2.jpg" style="width:100%" />
						</div>
						<div class="mySlides fade">
							<img src="./Includes/images/slide3.jpg" style="width:100%" />
						</div>
						<div class="mySlides fade">
							<img src="./Includes/images/slide4.jpg" style="width:100%" />
						</div>
						<div class="mySlides fade">
							<img src="./Includes/images/slide5.jpg" style="width:100%" />
						</div>
						<div class="mySlides fade">
							<img src="./Includes/images/slide6.jpg" style="width:100%" />
						</div>
					</div>
					<br />

					<div class="dot-continer" style="text-align:center">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
				</div>
			</section>
		</main>
		<script src="./JS/index.js"></script>
	</body>
</html>
