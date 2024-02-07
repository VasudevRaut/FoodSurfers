<?php
// your database connection code here

$owner_email = $_GET['location'];

// $conn = new mysqli("localhost", "root", "", "foodsurfers");
include 'db_con.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if (isset($_SESSION["user_id_email"])) {
    $email = $_SESSION["user_id_email"];
    // echo "vvvvvvvvvvvvvvvvvvvvvvvvvvvv";
}
// $sql = "INSERT INTO mess_owner (Owner_name, Email, Mob_no) VALUES ('$messOwnerName', '$email', '$mobile')";

$sql = "DELETE FROM `favorites_mess` WHERE user_email='$email' AND owner_email='$owner_email';
";



if ($conn->query($sql) === TRUE) {
    // echo "Registration successful ownner ! ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}










// Query to fetch data based on the selected location

echo $owner_email;
$conn->close();

// Close the database connection
// $conn->close();
?>
