<?php
// your database connection code here

$location = $_GET['location'];
$rating = $_GET['rating'];

include 'db_con.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if (isset($_SESSION["user_id_email"])) {
    $email = $_SESSION["user_id_email"];
    // echo "vvvvvvvvvvvvvvvvvvvvvvvvvvvv";
}

date_default_timezone_set('Asia/Kolkata');

$currentHour = date('H:i');
$currentDate = date('Y-m-d');


$result = mysqli_query($conn, "SELECT * FROM `review` WHERE cust_email = '$email' AND date = '$currentDate' AND owner_email='$location'");

// Check if a matching record was found
if (mysqli_num_rows($result) > 0) {
    // Record already exists, do not insert
    echo "Record already exists!";

} else {
    // Record does not exist, proceed with the INSERT query
    mysqli_query($conn, "INSERT INTO `review` (cust_email, owner_email,date,Timing,Rating) VALUES ('$email', '$location','$currentDate','$currentHour','$rating')");
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
