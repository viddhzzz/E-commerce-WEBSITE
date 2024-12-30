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
	.container {
      margin-top: 5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1,
    h2,
    h3,
    h4 {
      text-align: center;
      margin-bottom: 1rem;
    }

    .btn-group-toggle {
      display: flex;
      justify-content: center;
      margin-bottom: 1rem;
    }

    .btn-group-toggle .btn {
      margin: 0.5rem;
      padding: 0.75rem 1.5rem;
      font-size: 1.1rem;
    }

    .input-group {
      margin-bottom: 1.5rem;
    }

    .input-group-text {
      background-color: #f8f9fa;
      border-color: #ced4da;
    }

    .form-control {
      border-color: #ced4da;
    }

    #results {
      margin-top: 1rem;
      text-align: center;
    }

    #results h4 {
      font-weight: bold;
    }

    #results p {
      font-size: 1.1rem;
    }

    #rectangleInputs {
      margin-top: 2rem;
      padding: 2rem;
      border: 1px solid #ced4da;
      border-radius: 0.5rem;
      background-color: #f8f9fa;
      width: 100%;
      max-width: 500px;
    }

    #rectangleInputs h4 {
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .collection-item {
      text-align: center;
      margin-bottom: 30px;
    }

    .collection-item img {
      width: 100%;
      height: auto;
      transition: transform 0.2s ease-in-out;
    }

    .collection-item h5 {
      margin-top: 15px;
      font-weight: bold;
    }

    .collections-section {
      padding: 50px 0;
    }

    .collection-item:hover img {
      transform: scale(1.05);
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
		<span>Resin Calculation</span>
	</div>
  <div class="container mt-5">
    <h1>Select a Type:</h1>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-outline-dark">
        <input type="radio" name="options" id="coating" autocomplete="off"> Coating
      </label>
      <label class="btn btn-outline-dark">
        <input type="radio" name="options" id="casting" autocomplete="off"> Casting
      </label>
    </div>
    <h2 class="mt-4">Now Select a Shape</h2>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-outline-dark">
        <input type="radio" name="shapeOptions" id="squareRectangle" autocomplete="off"> Square / Rectangle
      </label>
      <label class="btn btn-outline-dark">
        <input type="radio" name="shapeOptions" id="circle" autocomplete="off"> Circle
      </label>
    </div>
    <h3 class="mt-4">Resin-Hardener Ratio:</h3>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-outline-dark">
        <input type="radio" name="ratioOptions" id="ratio2to1" autocomplete="off"> 2:1
      </label>
      <label class="btn btn-outline-dark">
        <input type="radio" name="ratioOptions" id="ratio3to1" autocomplete="off"> 3:1
      </label>
    </div>
    <div id="rectangleInputs" class="mt-4">
      <h4>Coating Calculation</h4>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Length (in inches)</span>
        </div>
        <input type="text" class="form-control" id="length">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Breadth (in inches)</span>
        </div>
        <input type="text" class="form-control" id="breadth">
      </div>
      <div id="results" style="display: none;">
        <h4>Total <span id="totalWeight"></span> Grams</h4>
        <p>Resin: <span id="resinWeight"></span> Gram</p>
        <p>Hardener: <span id="hardenerWeight"></span> Gram</p>
      </div>
    </div>
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

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script>
    $(document).ready(function () {
      function calculateWeights() {
        let length = parseFloat($('#length').val());
        let breadth = parseFloat($('#breadth').val());
        let ratio = $('input[name="ratioOptions"]:checked').attr('id');

        if (!isNaN(length) && !isNaN(breadth) && ratio) {
          let totalWeight = length * breadth * 0.837; // Example calculation
          let resinWeight, hardenerWeight;

          if (ratio === 'ratio2to1') {
            resinWeight = totalWeight * (2 / 3);
            hardenerWeight = totalWeight * (1 / 3);
          } else if (ratio === 'ratio3to1') {
            resinWeight = totalWeight * (3 / 4);
            hardenerWeight = totalWeight * (1 / 4);
          }

          $('#totalWeight').text(totalWeight.toFixed(2));
          $('#resinWeight').text(resinWeight.toFixed(2));
          $('#hardenerWeight').text(hardenerWeight.toFixed(2));
          $('#results').show();
        } else {
          $('#results').hide();
        }
      }

      $('#length, #breadth').on('input', calculateWeights);
      $('input[name="ratioOptions"]').on('change', calculateWeights);

      $('.collection-item').on('click', function () {
        if ($(this).find('h5').text() === 'Pigments') {
          window.location.href = 'yo.html';
        }
      });
    });
  </script>
</body>
</html>
