<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resin Enchantment</title>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- FontAwesome CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<style>
		.footer-black {
			background-color: black; /* Set the background color to black */
			color: white; /* Set the text color to white for contrast */
			height: 100px; /* Set the height of the footer */
			display: flex; /* Use flexbox for layout */
			flex-direction: column; /* Stack children vertically */
			justify-content: center; /* Center content vertically */
			align-items: center; /* Center content horizontally */
			padding: 20px; /* Add some padding inside the footer */
			box-sizing: border-box; /* Ensure padding is included in height */
		}
		.footer-black .footer-content {
			text-align: center; /* Center text */
		}
		.footer-black .footer-content p {
			margin: 0; /* Remove default margin */
			padding-bottom: 10px; /* Space below the text */
		}
		.footer-black .social {
			list-style: none; /* Remove default list styles */
			padding: 0; /* Remove default padding */
			display: flex; /* Use flexbox for layout */
			gap: 15px; /* Space between icons */
			margin: 0; /* Remove default margin */
			justify-content: center; /* Center content vertically */
			align-items: center;
		}
		.footer-black .social li {
			display: inline; /* Display list items inline */
		}
		.footer-black .social a {
			color: white; /* Set icon color to white */
			font-size: 24px; /* Set icon size */
			text-decoration: none; /* Remove underline from links */
		}
		.footer-black .social a:hover {
			color: #ccc; /* Change icon color on hover */
		}
		.custom-navbar {
		  background-color: black;
		}
		.second-navbar {
			background-color: black;
			position: fixed;
			top: 60px; /* Adjust based on the height of the first navbar */
			width: 100%;
			z-index: 1030;
			margin-top: 10px; 
		}
		.second-navbar .nav-link {
			color: white !important;
			font-size: 1rem; /* Default font size for larger screens */
		}
		.navbar .nav-item {
			margin-left: 10px;
		}
		.navbar .nav-link {
		  display: flex;
		  align-items: center;
		}
		.navbar .nav-link i {
		  margin-right: 5px;
		}
		.navbar-nav.ml-auto {
		  display: flex;
		  flex-direction: row;
		}
		.navbar-nav.ml-auto .nav-item {
		  display: inline-block;
		  margin-left: 10px;
		}
		.navbar-fixed-top {
		  position: fixed;
		  top: 0;
		  width: 100%;
		  z-index: 1030;
		}
		.second-navbar .navbar-nav {
		  display: flex;
		  flex-direction: row;
		  justify-content: center;
		  flex-wrap: nowrap;
		  width: 100%;
		}
		.second-navbar .nav-item {
		  flex: 1;
		  text-align: center;
		}
		.second-navbar .nav-link:hover {
		  color: lightgray;
		}
		.footer-logo {
			width: 150px;  /* Set the desired width */
			height: 50px;  /* Set the desired height */
			object-fit: contain; /* Optional: Ensure the aspect ratio is maintained */
		}
		@media (max-width: 768px) {
			.second-navbar .nav-link {
				font-size: 0.8rem; /* Smaller font size for mobile devices */
			}
		}
		body {
			padding-top: 120px; /* Adjust based on the combined height of the fixed navbars */
		}
		body {
			margin: 0;
			display: flex;
			flex-direction: column;
			min-height: 100vh;
			font-family: Arial, Helvetica, sans-serif;
			padding-top: 120px; /* Adjust based on the combined height of the fixed navbars */
		}
		main {
			flex: 1;
		}
		.con {
			position: relative;
			text-align: center;
			color: white;
			margin-left: -20px;
		}
		.text-block {
			position: absolute;
			top: 70%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: black;
			text-align: center;
		}
		.text-block h3 {
			font-size: 36px;
			font-weight: bold;
		}
		.text-block button {
			margin-top: 20px;
		}
		.why-choose-us {
			margin-top: 0px;
			background-color:#e4f1fe;
			padding-top:50px;
			padding-bottom:50px;
		}
		.why-choose-us .feature-box {
			margin-bottom: 30px;
		}
		.why-choose-us .feature-box i {
			font-size: 50px;
			margin-bottom: 20px;
		}
		.why-choose-us .feature-box h3 {
			font-size: 18px;
			font-weight: bold;
			text-transform: uppercase;
		}
		.review-section {
			text-align: center;
			margin: 30px 0;
			background-color: white;
			padding-top:50px;
			padding-bottom:50px;
			margin-top:-1px;
		}
		.carousel-item {
			padding: 20px;
			width: 100%;
		}
		.carousel-indicators li {
			background-color: #000;
		}
		.star-rating {
			color: #ffcc00;
		}
		.collection-item {
			text-align: center;
			margin-bottom: 30px;
			transition: transform 0.3s;
		}
		.collection-item:hover {
			transform: scale(1.05);
			cursor: pointer;
		}
		.collection-item img {
			width: 100%;
			height: auto;
		}
		.collection-item h5 {
			margin-top: 15px;
			font-weight: bold;
		}
		.collections-section {
			padding: 50px 0;
		}
	   .popup {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
		}
		.popup-content {
			position: relative;
			background-color: black;
			margin: 15% auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
			max-width: 500px;
			text-align: center;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
		}
		.popup-text h2 {
			margin: 0 0 10px;
			font-size: 24px;
			color: white;
		}
		.popup-text p {
			margin: 0;
			font-size: 18px;
			color: #555;
		}
		.popup-image img {
			width: 100%;
			height: auto;
		}
		.close {
			position: absolute;
			top: 10px;
			right: 15px;
			color: red;
			font-size: 24px;
			font-weight: bold;
			cursor: pointer;
		}
		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		.full-width-carousel {
			width: 100%;
		}
		.full-width-carousel .carousel-inner {
			width: 100%;
		}
		.full-width-carousel .carousel-item img {
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
		<a class="navbar-brand" href="#">
			<img src="logo.jpeg" width="90" height="50" alt="Logo">
		</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fas fa-star"></i>
					<span class="badge badge-danger"></span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fas fa-shopping-bag"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="person-acc.php">
					<i class="fas fa-user"></i>
				</a>
			</li>
		</ul>
	</nav>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light second-navbar">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item"><a class="nav-link" href="INDEX.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="res-arrival.php">New Arrival</a></li>
				<li class="nav-item"><a class="nav-link" href="spec-coupons.php">Coupons</a></li>
				<li class="nav-item"><a class="nav-link" href="res-bulk.php">Buy Bulk</a></li>
				<li class="nav-item"><a class="nav-link" href="res-cal.php">Resin Calculator</a></li>
				<li class="nav-item"><a class="nav-link" href="Contact-Us.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<!-- Carousel Section -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: -15px -20px 0px -20px;">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img1.jpg" alt="First slide">
				<div class="carousel-caption d-none d-lg-block">
			  
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img2.jpg" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">  
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img3.jpg" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
				  
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="popup" id="popupAd">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <div class="popup-text">
                <h2>Get <span style="color: #ff6600;">10% off</span> on order above ₹2000/-</h2>
                <p>Use code - <strong>BULK10</strong></p>
            </div>
        </div>
    </div>
	<div class="container collections-section">
        <h2 class="text-center mb-5">Collections</h2>
        <div class="row">
			<div class="col-md-3 collection-item">
				<a href="Bookmark/Bookmark-pra.html"> <!-- Use target="_blank" to open in a new tab -->
					<img src="PHOTOS/book.jpg" alt="Bookmarks" class="img-fluid">
				</a>
				<h5>Bookmarks</h5>
			</div>
            <div class="col-md-3 collection-item" onclick="openPage()">
				<a href="Oranaments/oranaments-choice.html"> 
					<img src="PHOTOS/ora.jpg" alt="Ornaments" class="img-fluid">
				</a>
                <h5>Ornaments</h5>
            </div>
			<div class="col-md-3 collection-item">
			<a href="Keychains/Keychains-choice.html"> <!-- Use target="_blank" to open in a new tab -->
                <img src="PHOTOS/key.jpg" alt="Keychains" class="img-fluid">
			</a>
                <h5>Keychains</h5>
            </div>
			<div class="col-md-3 collection-item">
				<a href="Phone Cases/phone-pra.html"> <!-- Use target="_blank" to open in a new tab -->
					<img src="PHOTOS/phone.jpg" alt="Preservation" class="img-fluid">
				</a>
                <h5>Phone Case</h5>
            </div>
            <div class="col-md-3 collection-item">
			<a href="Rakhi Making/Rakhi-pra.html">
                <img src="PHOTOS/rakhi.jpg" alt="Rakhi Making" class="img-fluid">
            </a>    
				<h5>Rakhi Making</h5>
            </div>
			<div class="col-md-3 collection-item" onclick="openPage()">
			<a href="Wedding Things/Wed-pra.html">
                <img src="PHOTOS/wed.jpg" alt="Weddings Things" class="img-fluid">
			</a>
                <h5>Weddings Things</h5>
            </div>
            <div class="col-md-3 collection-item">
			<a href="Wall Hanger/Clock-pra.html">
                <img src="PHOTOS/clock.jpg" alt="Clock" class="img-fluid">
			</a>
                <h5>Wall Hanger</h5>
            </div>
            <div class="col-md-3 collection-item">
			<a href="Show Case/show-pra.html">
                <img src="PHOTOS/showcase.jpg" alt="Show Pieces" class="img-fluid">
			</a>
                <h5>Showcase</h5>
            </div>
        </div>
    </div>
    </div>
	<section class="why-choose-us">
		<div class="container">
			<h2 style="text-align: center;">WHY CHOOSE US</h2><br /><br /><br />
			<div class="row text-center">
				<div class="col-md-3 col-sm-6 feature-box">
					<i class="fas fa-globe"></i>
					<h3>International Shipping</h3>
				</div>
				<div class="col-md-3 col-sm-6 feature-box">
					<i class="fas fa-certificate"></i>
					<h3>Quality Assurance</h3>
				</div>
				<div class="col-md-3 col-sm-6 feature-box">
					<i class="fas fa-tags"></i>
					<h3>5000+ SKU's</h3>
				</div>
				<div class="col-md-3 col-sm-6 feature-box">
					<i class="fas fa-truck"></i>
					<h3>Fast Delivery</h3>
				</div>
			</div>
		</div>
	</section>
	<div class="review-section">
		<h2>Let customers speak for us</h2>
		<div class="carousel slide" id="customerReviews" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#customerReviews" data-slide-to="0" class="active"></li>
				<li data-target="#customerReviews" data-slide-to="1"></li>
				<li data-target="#customerReviews" data-slide-to="2"></li>
				<li data-target="#customerReviews" data-slide-to="3"></li>
				<li data-target="#customerReviews" data-slide-to="4"></li>
				<li data-target="#customerReviews" data-slide-to="5"></li>
				<li data-target="#customerReviews" data-slide-to="6"></li>
				<li data-target="#customerReviews" data-slide-to="7"></li>
				<li data-target="#customerReviews" data-slide-to="8"></li>
				<li data-target="#customerReviews" data-slide-to="9"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<h3>Great quality in low budget</h3>
					<p>Literally best purchase ever; I wasn’t expecting such quality in such low budget.</p>
					<p class="text-muted">Tabinda Fayaz</p>
					<p class="star-rating">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</p>
				</div>
			<!-- Additional review items here -->
			<div class="carousel-item">
				<h3>Just an amazing experience</h3>
				<p>Specially the conversation happens between us that very much helpful for me to get the idea about my parcel thanks for cooperation.</p>
				<p class="text-muted">RUGVEDA DUKHANDE</p>
				<p class="star-rating">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</p>
			</div>
		</div>
		<a class="carousel-control-prev" href="#customerReviews" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#customerReviews" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div>
	</div>
	<footer class="footer mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h5 style="color:black;">About</h5>
					<img src="namelogo.jpeg" alt="Logo" class="footer-logo" >
					<p>We are all about art and artists. We are suppliers of all the things required to create resin art, not only this we also have raw materials for resin art, candle making and material required for other art forms as well.<br><br></p>
				</div>
				<div class="col-md-3">
					<h5 style="color:black;">Policy</h5>
					<ul class="list-unstyled">
						<li><a href="#" style="color:black;">About Us</a></li>
						<li><a href="#" style="color:black;">Contact</a></li>
						<li><a href="#" style="color:black;">Privacy Policy</a></li>
						<li><a href="#" style="color:black;">Cancellation / Refund Policy</a></li>
						<li><a href="#" style="color:black;">Terms & Conditions</a></li>
						<li><a href="#" style="color:black;">Terms of Service</a></li>
						<li><a href="#" style="color:black;">Refund policy<br><br></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5 style="color:black;">Our store</h5>
					<address>
						Plot No-A/115,A/116, Laxminarayan Industrial Park, BRC Compound, Udhna Navsari Road, Udhna Surat, Gujarat - 395007<br>
						<a href="tel:+919106262066">+91 91062 62066</a><br>
						<a href="mailto:harshresinstore@gmail.com">harshresinstore@gmail.com<br><br></a> 
					</address>
				</div>
				<div class="col-md-3">
					<h5 style="color:black;">Subscribe</h5>
					<p>Enter your email below to be the first to know about new collections and product launches.<br><br></p>
					<form action="#" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" class="form-control" placeholder="Enter your email">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="submit"><i class="fas fa-arrow-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>
	<footer class="footer-black">
		<div class="footer-content">
			<p>&copy; Resin Enchantment Arts India © 2024. All Rights Reserved</p>
			<ul class="social">
				<li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function openPage() {
            window.location.href = 'yo.html';
        }
    </script>
	<!-- Bootstrap JS and dependencies -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>
