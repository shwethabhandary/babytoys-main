<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nirvana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Nirvana</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="product.php" class="nav-link">Products</a></li> 
					<li class="nav-item"><a href="news.php" class="nav-link">NewsLetter</a></li>
					<li class="nav-item"><a href="team.php" class="nav-link">Founders</a></li>
          <li class="nav-item"><a href="allemployees.php" class="nav-link">All Company</a></li>
          <li class="nav-item"><a href="../innerIndex.php" class="nav-link">Back to Main</a></li>
                    <?php if($_SESSION["loggedin"]) { echo ('
                        <li class="nav-item"><a href="../logout.php" class="nav-link"><i class="fa fa-sign-out">Log Out</i></a></li>
                        ');}?>
				  </ul>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <<div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          	<h1 class="mb-0 bread">About us</h1>
            <br/><br/>
        </div>
      </div>
      <br/><br/>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about_1.jpg);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Welcome to Nirvana</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p>While there’s no big bad wolf coming to blow your house or business down, it stands true that some building materials are better suited for your project than others. Today, most structures are composed of wood, steel, concrete, or masonry. Each material has its own strengths and weaknesses that should be considered..</p>
							<p>In most cases, engineers and architects utilize a combination of these materials in their designs to balance cost, aesthetics, structural integrity, and longevity. We’ll go into detail about what those strengths and weaknesses are, so you can take an active role in evaluating your structure’s design..</p>
							<p><a href="product.php" class="btn btn-primary">View Catalog</a></p>
						</div>
				</div>
			</div>
		</section>
    
    <section class="ftco-section">
      <div class="container">
        <center><h2 class="mb-4" style="font-weight: bold;">Meet our Founders</h2></center>
        <div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="product">
              <center><a class="img-prod"><img class="img-fluid" src="images/admin_nimish.jpg" style="max-width: 170px;border-radius: 50%;"></center></a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3>
                <a>
                  <?php $myFile = "contact.txt";
                  $lines = file($myFile);
                  echo $lines[0];?><br/>
                  <?php echo $lines[3]; ?>
                </a>
                </h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span>
                    <?php echo $lines[1]; ?>
                    <br/>
                    <?php echo $lines[2]; ?>
                    </span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="product">
              <center><a class="img-prod"><img class="img-fluid" src="images/admin_shwetha.jpg" style="max-width: 170px;border-radius: 50%;"></center></a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3>
                  <a>
                    <?php 
                      echo $lines[4];?><br/>
                      <?php echo $lines[7]; ?>
                  </a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span><?php echo $lines[5]; ?><br/><?php echo $lines[6]; ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="product">
              <center><a class="img-prod"><img class="img-fluid" src="images/admin_devansh.jpg" style="max-width: 170px;border-radius: 50%;"></center></a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a>
                <?php 
                      echo $lines[8];?><br/>
                      <?php echo $lines[11]; ?>
                </a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span><?php echo $lines[9]; ?><br/><?php echo $lines[10]; ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
			<div class="container py-4">
				<center>Thank you for stoping by <io style="color:red;">&#10084;</io></center>
				<center>copyrights &copy 2022 shwethabhandary</center>
			</div>
		</section>
	</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>