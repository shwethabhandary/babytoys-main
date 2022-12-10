<?php

include('connection.php');

// check if the form has been submitted
if (isset($_POST['submit'])) {

  // get the form data
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  // validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address";
  }

  // if there are no errors, proceed with the database insert
  if (!isset($error)) {

    // connect to the database
    // code to connect to the database goes here


    // insert the user's data into the database
    $sql = "INSERT INTO webusers (name, email, password) VALUES ('$name','$email','$password')";
    try{
      if (mysqli_query($con, $sql)) {
      echo '<script>
          alert("successfully Created!")
          window.location.href="index.php";
      </script>';
      } else {
        echo '<script>
            alert("ERROR")
            window.location.href="index.php";
            </script>';
      }
    }
    catch(Exception $e) {
      echo '<script>
            alert("ERROR")
            window.location.href="index.php";
            </script>';
    }
    mysqli_close($con);
    exit;
  }
}

?>