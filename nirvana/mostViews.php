<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
include('connection.php');
?>
<?php $arr = array(
        array("id"=>0,
        "image" => "images/product-1.jpg",
        "name" => "Steel TMT",
        "cost" =>"$80.00"
    ),
    array("id"=>1,
        "image" => "images/product-2.jpg",
        "name" => "Cement",
        "cost" =>"$40.00"
    ),
    array("id"=>2,
        "image" => "images/product-3.jpg",
        "name" => "Bricks",
        "cost" =>"$10.00"
    ),
    array("id"=>3,
        "image" => "images/product-4.jpg",
        "name" => "M Sand",
        "cost" =>"$30.00"
    ),
    array("id"=>4,
        "image" => "images/product-5.jpg",
        "name" => "Medium Stones",
        "cost" =>"$20.00"
    ),
    array("id"=>5,
        "image" => "images/product-6.jpg",
        "name" => "Tiles",
        "cost" =>"$25.00"
    ),
    array("id"=>6,
        "image" => "images/product-7.jpg",
        "name" => "Door",
        "cost" =>"$70.00"
    ), 
    array("id"=>7,
        "image" => "images/product-8.jpg",
        "name" => "Windows",
        "cost" =>"$40.00"
    ), 
    array("id"=>8,
        "image" => "images/product-9.jpg",
        "name" => "Electric Wires",
        "cost" =>"$30.00"
    ),

    );

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Most Viewed items</title>
    <?php ob_start(); ?>
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
					<li class="nav-item active"><a href="product.php" class="nav-link">Products</a></li> 
					<li class="nav-item"><a href="news.php" class="nav-link">NewsLetter</a></li>
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
    <!-- END nav -->

    <section class="ftco-section">
    <h2 style="color:green;"><center>Top 5 Most Viewed products </center></h2>
        <div style="margin: auto; width: 40%; border: 3px solid green; padding: 10px;"> 
         <?php
        $sqlrecent = "SELECT * FROM mostvisitednimish order by count desc LIMIT 5 ";

        $resultrecent = $con->query($sqlrecent);

        if (mysqli_num_rows($resultrecent) === 0) {

            echo "<center><h1 class='lead'> No records found </h1></center>";
        } else {

            while ($row = $resultrecent->fetch_assoc()) {
                echo "
                <a href='productView.php?id={$row['id']}' class='img-prod'>
                    <div class='block-21 mb-4 d-flex ftco-animate'>
                            <a class='blog-img mr-4' href='productView.php?id={$row['id']}'>
                                <img class='img-fluid' src={$row['image']}>
                            </a>
                            <div class='text'>
                                <h4 class='heading-1'><a href='productView.php?id={$row['id']}'>{$row['name']}</a></h4>
                                <div class='meta'>
                                    <div><a><span class='icon-person'></span>Views :{$row['count']}</a></div>
                                </div>
                            </div>
                    </div>
                </a>";
            }

        }

        ?>
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
  <script src="../js/login.js"></script>
    
  </body>
</html>