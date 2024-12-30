<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .custom-navbar {
      background-color: black;
    }
	.second-navbar {
      background-color: black;
      position: fixed;
      top: 60px; /* Adjust based on the height of the first navbar */
      width: 100%;
      z-index: 1030;
      margin-top: 10px; /* Add this line */
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

    @media (max-width: 768px) {
      .second-navbar .nav-link {
        font-size: 0.8rem; /* Smaller font size for mobile devices */
      }
    }

    body {
      padding-top: 120px; /* Adjust based on the combined height of the fixed navbars */
    }
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

    .contact-section {
      padding: 50px 0;
    }
    .contact-form {
      background: #f9f9f9;
      padding: 30px;
      border-radius: 5px;
    }
    .form-control {
      margin-bottom: 20px;
    }
    .contact-info h5 {
      font-weight: bold;
      margin-bottom: 20px;
    }
    .contact-info p {
      margin-bottom: 10px;
    }
    .social-media a {
      font-size: 18px;
      margin-right: 10px;
	  color:black;
    }
	.tago{
		text-align:center;
		height:100px;
		width:100%;
		padding-top:30px;
		font-size: 20px;
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
  	<div class="tago">
		<a href="index.html"><span>Home ></span></a>
		<span>Contact Us</span>
	</div>
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
  <div class="container contact-section">
    <div class="row">
      <div class="col-md-6">
        <h2>We would love to hear from you.</h2>
        <form class="contact-form" action="connect.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="saveInfo" id="saveInfo">
        <label class="form-check-label" for="saveInfo">Save my name, email, and website in this browser for the next time I comment.</label>
    </div>
    <button type="submit" class="btn btn-dark mt-3">Submit Now</button>
</form>
      </div>
      <div class="col-md-6">
        <div class="contact-info">
          <h5>Address</h5>
          <p>Plot No-A/115,A/116,laxminarayan Industrial Park, BRC Compound, Udhna Navsari Road, Udhna Surat, Gujarat - 394210</p>
          <h5>Information</h5>
          <p>+91 91062 62066</p>
          <p>harshresinstore@gmail.com</p>
          <h5>Social Media</h5>
          <p class="social-media">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
          </p>
          <h5>We're Open</h5>
          <p>Mon - Fri: 9 AM - 6 PM</p>
          <p>Sat: 9 AM - 4 PM</p>
          <p>Sun: Closed</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5 style="color:black;">About</h5>
          <img src="namelogo.jpeg" alt="Logo" width="200px" class="footer-logo">
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
