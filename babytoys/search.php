<?php
// Connect to the database
include('connection.php');
// Check for a search query
if (isset($_GET['q'])) {
  // Store the search query
  $q = $_GET['q'];

  // Build the SQL query
  $query = "SELECT * FROM product WHERE name LIKE '%$q%' ";

  // Execute the query
  $result = mysqli_query($con, $query);

  // Loop through the result set
  while ($row = mysqli_fetch_array($result)) {
    // Print the user data
    echo "Name: " . $row['name'] . "<br>";
    echo "Cost: " . $row['cost'] . "<br><br>";
  }
}

?>