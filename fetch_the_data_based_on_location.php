<?php
// your database connection code here

$selectedLocation = $_GET['location'];


session_start();
    $_SESSION['location'] = $selectedLocation;
    // header("Location: test.php");
    // exit();




// Query to fetch data based on the selected location

echo $selectedLocation;

// Close the database connection
// $conn->close();
?>
