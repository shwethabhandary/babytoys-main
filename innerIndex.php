<?php
// We need to use sessions, so you should always start sessions using the below code.
include('connection.php');
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toy Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css1/style.css">

  </head>
  <body class="goto-here">
	<div class="py-1 " style="background-color: white">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php" style="color:#0891f8;">Cross Webbee</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item"><a href="#companies" class="nav-link">Our Companies</a></li>
					
               <?php if($_SESSION["loggedin"]) { echo ('
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out">Log Out</i></a></li>
                        ');}
                     else{
                        echo('
                        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#login" class="nav-link">Sign In</a></li> 
                        <li class="nav-item"><a href="#signup" class="nav-link">Sign Up</a></li>');
                     }?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    <div class="business" id="companies">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div>
                   <h1 style="color:#0891f8;">Children Company of Cross Webbee</h1>
                  <p>Cross Webbee is parent company of 3 start ups babyToys, Nirvana Constructions and MS Tayari </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">

                     <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                           <img class="card-img-top" style="height: 18rem;" src="https://target.scene7.com/is/image/Target/GUEST_60e6268a-e4e9-4cac-90e5-8b94ac3859b5?wid=1000&hei=1000&qlt=80&fmt=webp" alt="Card image cap">
                           <div class="card-body">
                             <h2 class="card-title">BabyToys</h2>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="babytoys/index.php" class="btn"style="background-color:#0891f8;color:white;">Go to BabyToys</a>
                           </div>
                         </div>
                     </div>

                     <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                           <img class="card-img-top" style="height: 18rem;" src="https://images.unsplash.com/photo-1536895058696-a69b1c7ba34f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29uc3RydWN0aW9ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
                           <div class="card-body">
                             <h2 class="card-title">Nirvana</h2>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="nirvana/index.php" class="btn btn-primary" style="background-color:#0891f8;color:white;">Go to Nirvana</a>
                           </div>
                         </div>
                     </div>

                     <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                           <img class="card-img-top" style="height: 18rem;" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTfCrBhc0q7aAPcyBlzqNTN3-ktL5suEC63aNTPthlwaRqfc-SB8yj85n51oeGiF-g0McouxmkkyHcGEkvXncKlwocnhp39cgRxmJsmMqWO&usqp=CAE" alt="Card image cap">
                           <div class="card-body">
                              <h2 class="card-title">Ms Tayari</h2>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="https://devanshbansal.com/" class="btn btn-primary" style="background-color:#0891f8;color:white;">Go to MSTayari</a>
                           </div>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


    <div class="business" >
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                     <br/><br/>
                     <h1 style="color:#0891f8;">Top Five Most Visited Products</h1>
               </div>
            </div>

            <h2 class="card-title">Cross webbee</h2>
            <div class='row'>
                     <?php
                  $sqltop = "SELECT * FROM mostvisited  order by count desc LIMIT 5 ";
                  $resultrecent = $con->query($sqltop);
                  while ($row = $resultrecent->fetch_assoc()) {
                     echo"
                     <div class='col-md-4 col-lg-2 ftco-animate' id={$row['id']}>
                              <div class='product'>
                                 <a href='/babytoys/babytoys/productView.php?id={$row['id']}' class='img-prod'>
                                    <img class='img-fluid' src={$row['image']}>
                                    <div class='overlay'></div>
                                    <div class='text py-3 pb-4 px-3 text-center'>
                                       <h3><a href='/babytoys/babytoys/productView.php?id={$row['id']}'>{$row['name']}</a></h3>
                                       <span>Company: {$row['company']}</span><br/>
                                       <span>Total Views: {$row['count']}</span>
                                    </div>
                                 </a>
                                 </div>
                              </div>
                     ";
               }
                  ?>
        </div>


        `<h2 class="card-title">BabyToys</h2>
            <div class='row'>
                     <?php
                  $sqltop = "SELECT * FROM mostvisited where company='shwetha' order by count desc LIMIT 5 ";
                  $resultrecent = $con->query($sqltop);
                  while ($row = $resultrecent->fetch_assoc()) {
                     echo"
                     <div class='col-md-4 col-lg-2 ftco-animate' id={$row['id']}>
                              <div class='product'>
                                 <a href='/babytoys/babytoys/productView.php?id={$row['id']}' class='img-prod'>
                                    <img class='img-fluid' src={$row['image']}>
                                    <div class='overlay'></div>
                                    <div class='text py-3 pb-4 px-3 text-center'>
                                       <h3><a href='/babytoys/babytoys/productView.php?id={$row['id']}'>{$row['name']}</a></h3>
                                       <span>Total Views: {$row['count']}</span>
                                    </div>
                                 </a>
                                 </div>
                              </div>
                     ";
               }
                  ?>
        </div>

      </div>
	</div>  

   </footer>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>