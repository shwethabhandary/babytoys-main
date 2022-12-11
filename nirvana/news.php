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
    <link rel="stylesheet" href="css/style.css">
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
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="product.php" class="nav-link">Products</a></li>
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


    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          	<h1 class="mb-0 bread">News</h1>
        </div>
      </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="row">
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a  class="block-20" style="background-image: url('images/news-1.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a>Aug 10, 2022</a></div>
		                  <div><a>Admin</a></div>
		                </div>
		                <h3 class="heading"><a>Top Construction material E-commerce</a></h3>
		                <p>One of the top performing E-commerce in Construction materials.</p>
		                <p><a class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a class="block-20" style="background-image: url('images/news-2.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a>Nov 11, 2022</a></div>
		                </div>
		                <h3 class="heading"><a>Nirvana gaining popularity</a></h3>
		                <p>Nirvan number of users crossing 1 million.</p>
		                <p><a style="color: white;"class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a class="block-20" style="background-image: url('images/news-3.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a>Dec 11, 2022</a></div>
		                </div>
		                <h3 class="heading"><a>One Stop for all Solutions</a></h3>
		                <p> Buy all kind of construction materials online </p>
		                <!-- <p><a style="color: white;"class="btn btn-primary py-2 px-3">Coming soon..</a></p> -->
		              </div>
		            </div>
		          </div>
						</div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a>Steel TMT <span>(11)</span></a></li>
                <li><a>Cement <span>(32)</span></a></li>
                <li><a>Bricks <span>(7)</span></a></li>
                <li><a>M Sand <span>(18)</span></a></li>
              </ul>
            </div>

            <!-- <div class="sidebar-box ftco-animate">
              <h3 class="heading">Previous Collection</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a>Wooden Toys used in early 2000s</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> Aug 09, 2022</a></div>
                    <div><a><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a >Means of Transportation</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> Jul 04, 2022</a></div>
                    <div><a><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_6.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a>Disney Collection</a></h3>
                  <div class="meta">
                    <div><a><span class="icon-calendar"></span> June 08, 2022</a></div>
                    <div><a><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tags</h3>
              <div class="tagcloud">
                <a class="tag-cloud-link">Reliability</a>
                <a class="tag-cloud-link">Long lasting</a>
                <a class="tag-cloud-link">Superior Quality</a>
                <a class="tag-cloud-link">Good Customer Service</a>
                <a class="tag-cloud-link">Quick delivery</a>
                <a class="tag-cloud-link">Logistics</a>
              </div>
            </div>

        </div>
      </div>
    </section> <!-- .section -->
    <footer>
      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
          <center>copyrights &copy 2022 Nimish Lingesh</center>
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
  <script src="../js/login.js"></script>
    
  </body>
</html>