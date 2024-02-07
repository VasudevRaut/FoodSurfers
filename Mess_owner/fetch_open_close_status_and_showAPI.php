<?php
// Assuming you have a database connection
// Replace the following with your database connection code


// Create a connection
$conn = new mysqli("localhost", "root", "", "foodsurfers");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

if (isset($_SESSION["user_id"])) {
    $email = $_SESSION["user_id"];
}

// Fetch the previous status from the database
$fetchStatusSql = "SELECT open_closed_status FROM mess WHERE Email = '$email'"; // Adjust the query based on your database schema
$result = $conn->query($fetchStatusSql);

// echo "vasudevvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $previousStatus = $row["open_closed_status"];
} else {
    $previousStatus = false; // Default value if no record is found
}

// Close the database connection
$conn->close();

// Return the previous status as JSON
echo json_encode(['previousStatus' => $previousStatus]);
?>
