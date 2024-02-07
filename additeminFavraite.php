<?php
// your database connection code here

$owner_email = $_GET['location'];

include 'db_con.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if (isset($_SESSION["user_id_email"])) {
    $email = $_SESSION["user_id_email"];
    // echo "vvvvvvvvvvvvvvvvvvvvvvvvvvvv";
}




$result = mysqli_query($conn, "SELECT * FROM `favorites_mess` WHERE user_email = '$email' AND owner_email = '$owner_email'");

// Check if a matching record was found
if (mysqli_num_rows($result) > 0) {
    // Record already exists, do not insert
    echo "Record already exists!";
} else {
    // Record does not exist, proceed with the INSERT query
    mysqli_query($conn, "INSERT INTO `favorites_mess` (user_email, owner_email) VALUES ('$email', '$owner_email')");
    echo "Record inserted successfully!";
}






// $sql = "INSERT IGNORE INTO `favorites_mess` (user_email, owner_email) VALUES ('$email', '$owner_email')";

// $sql = "DELETE FROM `favorites_mess` WHERE user_email='$email' AND owner_email='$owner_email';
// ";



// if ($conn->query($sql) === TRUE) {
//     // echo "Registration successful ownner ! ";
//     echo "Vasudev";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }










// Query to fetch data based on the selected location

echo $owner_email;
$conn->close();

// Close the database connection
// $conn->close();
?>
