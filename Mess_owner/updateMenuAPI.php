<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs from the form
    $mealChoice = $_POST["meal-choice"];
    $menuText = $_POST["menu-text"];

    // ... (validate and sanitize inputs as needed)

    // Assume you have a database connection
    // Replace the following with your database connection code
    

    // Create a connection
    // $conn = new mysqli("localhost", "root", "", "foodsurfers");
    include 'db_con.php';

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $currentDate = date("Y-m-d");
    // $currentDate = "2023-11-11";
    // $Email = "v@gmail.com";

    session_start();

    if (isset($_SESSION["user_id"])) {
        $email = $_SESSION["user_id"];
    }

    // Check if a record with the given meal choice already exists
    $checkRecordSql = "SELECT * FROM messmenu WHERE Email = '$email' AND date='$currentDate' AND meal_type='$mealChoice'";
    $result = $conn->query($checkRecordSql);
 

    if ($result->num_rows > 0) {
        // Update the existing record
        $updateRecordSql = "UPDATE messmenu SET menu_item = '$menuText' WHERE Email = '$email' AND date='$currentDate' AND meal_type='$mealChoice' ";
        if ($conn->query($updateRecordSql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Insert a new record
        $insertRecordSql = "INSERT INTO messmenu (Email, date, meal_type , menu_item) VALUES ('$email','$currentDate','$mealChoice', '$menuText')";
        if ($conn->query($insertRecordSql) === TRUE) {
            echo "New record inserted successfully";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    header("Location: dashboard.php");

}
?>
