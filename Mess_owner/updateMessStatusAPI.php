<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the new status value from the POST request
    $newStatus = isset($_POST['status']) ? $_POST['status'] : false;

    // Assuming you have a database connection
    // Replace the following with your database connection code

    // Create a connection
    // $conn = new mysqli("localhost", "root", "", "foodsurfers");
    include 'db_con.php';


    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    session_start();
    if (isset($_SESSION["user_id"])) {
        $email = $_SESSION["user_id"];
    }

    // Update the database with the new status value
    $updateStatusSql = "UPDATE mess SET open_closed_status = '$newStatus' WHERE Email = '$email'"; // Adjust the query based on your database schema
    if ($conn->query($updateStatusSql) === TRUE) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
