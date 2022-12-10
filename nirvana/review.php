<?php

include('connection.php');

// check if the form has been submitted
if (isset($_POST['submit'])) {

  // get the form data
  $rate = trim($_POST['rate']);
  $message = trim($_POST['message']);
  $prod_id= trim($_POST['prod_id']);


  // if there are no errors, proceed with the database insert
  if (!isset($error)) {

    // connect to the database
    // code to connect to the database goes here


    // insert the user's data into the database
    $sql = "INSERT INTO review (rating, message, prod_id) VALUES ('$rate','$message','$prod_id')";
    try{
      if (mysqli_query($con, $sql)) {
      echo '<script>
          alert("successfully Created!")
          window.location.href="productView.php";
      </script>';
      } else {
        echo '<script>
            alert("ERROR")
            window.location.href="productView.php";
            </script>';
      }
    }
    catch(Exception $e) {
      echo '<script>
            alert( $e,"ERROR")
            window.location.href="productView.php";
            </script>';
    }
    mysqli_close($con);
    exit;
  }
}

?>