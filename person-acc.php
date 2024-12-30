<?php
session_start();
require_once 'db_connect.php';

$user = null;
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
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
/* Ensure the body takes the full viewport height */
    body {
      margin: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Flex-grow for main content to take up available space */
    main {
      flex: 1;
    }

    
    /* Login and Sign Up Forms */
    .login-signup-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
    }

    .login-container,
    .signup-container {
      max-width: 100%;
      flex: 1 1 100%;
    }

    @media (min-width: 768px) {
      .login-container,
      .signup-container {
        max-width: 400px;
        flex: 1 1 48%;
      }
    }

    /* Login form styles */
    .login-container {
      
    }

    .login-container h2 {
      margin-bottom: 20px;
      font-size: 24px;
      text-align: center;
    }

    .login-container .form-group {
      margin-bottom: 15px;
    }

    .login-container .form-control {
      border-radius: .375rem;
    }

    .login-container .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .login-container .btn-primary:hover {
      background-color: #0056b3;
    }

    .login-container .form-check-label {
      margin-bottom: 0;
    }

    .login-container .forgot-password {
      text-align: center;
      margin-top: 10px;
    }

    .login-container .forgot-password a {
      color: #007bff;
    }

    .login-container .forgot-password a:hover {
      text-decoration: underline;
    }

    /* Sign Up Form Styles */
    .signup-container {
      
	  padding-left:50px;
      
    }

    .signup-container h2 {
      margin-bottom: 20px;
      font-size: 24px;
      text-align: center;
    }

    .signup-container .form-group {
      margin-bottom: 15px;
    }

    .signup-container .form-control {
      border-radius: .375rem;
    }

    .signup-container .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .signup-container .btn-primary:hover {
      background-color: #0056b3;
    }

    .signup-container .form-check-label {
      margin-bottom: 0;
    }

    .signup-container .already-have-account {
      text-align: center;
      margin-top: 10px;
    }

    .signup-container .already-have-account a {
      color: #007bff;
    }

    .signup-container .already-have-account a:hover {
      text-decoration: underline;
    }
	.tago{
		
		text-align:center;
		height:100px;
		width:100%;
		
		padding-top:30px;
		font-size: 20px;
	
	}
	
	        .modal-dialog-centered {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .modal-content {
            width: 100%;
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
	<div class="tago">
		<a href="index.html"><span>Home ></span></a>
		<span>Account</span>
	</div>
	
	
	
	
	
	
	
	
	
	<main>
		<!-- Login and Sign Up Forms -->
		<div class="container">
        <?php if ($user): ?>
            <h2>Welcome, <?php echo htmlspecialchars($user['username']); ?></h2>
            <p>Your account details:</p>
            <ul>
                <li>Username: <?php echo htmlspecialchars($user['username']); ?></li>
                <li>Email: <?php echo htmlspecialchars($user['email']); ?></li>
            </ul>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php else: ?>
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="login-email">Email address</label>
                    <input type="email" class="form-control" id="login-email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <div class="forgot-password">
                    <a href="#">Forgot your password?</a>
                </div>
            </form>
            <a href="sign.html" class="btn btn-success">Sign Up</a>
        <?php endif; ?>
    </div>		
					
					
					
					
					
					
					
		
		
		
				
				
			
		</main>


  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5 style="color:black;">About</h5>
          <img src="namelogo.jpeg" alt="Logo" class="footer-logo" height="15px">
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
            <a href="tel:+91910">+91 91062 *****</a><br>
            <a href="mailto:resinenchartments@gmail.com">resinenchartments@gmail.com<br><br></a>
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
