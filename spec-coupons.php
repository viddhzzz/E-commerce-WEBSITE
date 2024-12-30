<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resin Coupon</title>
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
.tago{
		text-align:center;
		height:100px;
		width:100%;
		padding-top:30px;
		font-size: 20px;
	}
	        body {
            font-family: Arial, sans-serif;
        }
        .breadcrumb {
            background: none;
            padding-left: 0;
        }
        h1 {
            font-size: 2.5em;
        }
        h2 {
            font-size: 2em;
            margin-top: 20px;
        }
        p, ul {
            font-size: 1.1em;
        }
        .rules-list {
            list-style: none;
            padding-left: 0;
        }
        .rules-list li:before {
            content: "\2022";
            color: black;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        .coupon-list {
            list-style: none;
            padding-left: 0;
        }
        .coupon-list li {
            margin-bottom: 10px;
        }
        .coupon-list li:before {
            content: "\2022";
            color: black;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
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
		<span>Coupons</span>
	</div>
      <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                
            </ol>
        </nav>

        <h1>REGULAR OFFERS</h1>

        <h2>SHOP MORE AND SAVE MORE !!!</h2>
        <p>Hello Crafters...</p>
        <p>We are very happy to have you here for some shopping today...</p>
        
        <h2>FEEL FREE TO CHOOSE THE BEST DEAL FOR YOU!!!</h2>
        <p>Here are with few rules so that you get the best out of the shopping.</p>
        <h3>Rules And Regulations:</h3>
        <ul class="rules-list">
            <li>Only one coupon is valid at one point in time so howsoever you save more amount please feel free to use the same.</li>
            <li>Some coupon have a minimum order criteria</li>
            <li>Please don’t use any space in the coupon code or any special characters until it’s mentioned or asked to do so.</li>
            <li>Some coupons may get deactivated during SALE.</li>
            <li>Free Shipping is only valid in INDIA.</li>
        </ul>

        <h3>Coupons Code Available:</h3>
        <ul class="coupon-list">
            <li><strong>HRSFREESHIP</strong>: Get Free Shipping on orders above 5000/-</li>
            <li><strong>BULKBULYS</strong>: Get 5% OFF on orders above 10,000/-</li>
            <li><strong>BULK10</strong>: Get 10% OFF on orders above 20,000/-</li>
            <li><strong>BUYBULK15</strong>: Get 15% OFF on orders above 35,000/-</li>
            <li><strong>REGULAR5</strong>: Get FLAT 5% OFF on EVERY ORDER, valid only for customers who have already placed 10+ orders with us.</li>
        </ul>
    </div>

  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5 style="color:black;">About</h5>
          <img src="namelogo.jpeg" alt="Logo" height="20px" class="footer-logo">
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
  <footer class="footer-black" height="300px">
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
