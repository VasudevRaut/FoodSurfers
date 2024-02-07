<?php
session_start(); // Start the session
function sanitize($data) {
    // Implement your sanitization logic
    return $data;
}
include 'db_con.php';
// $con = new mysqli("localhost", "root", "", "foodsurfers");
// session_start(); 
if (isset($_SESSION["user_id"])) {
    $email = $_SESSION["user_id"];
}

$updatedName = sanitize($_POST['name']);
    $updatedNumber = sanitize($_POST['number']);
    $updatedMobNo = sanitize($_POST['email']);
    $updatedMessName = sanitize($_POST['mess_name']);
    $updatedMessAddress = sanitize($_POST['mess_address']); // You have two fields with the same name, please clarify or adjust accordingly
    $updatedMorningStartTime = sanitize($_POST['morningStartTime']);
    $updatedMorningEndTime = sanitize($_POST['morningEndTime']);
    $updatedEveningStartTime = sanitize($_POST['eveningStartTime']);
    $updatedEveningEndTime = sanitize($_POST['eveningEndTime']);
    // $updatedType = sanitize($_POST['Type']);


    echo "Updated Name: $updatedName<br>";
    echo "Updated Number: $updatedNumber<br>";
    echo "Updated Mobile Number: $updatedMobNo<br>";
    echo "Updated Mess Name: $updatedMessName<br>";
    echo "Updated Mess Address: $updatedMessAddress<br>";
    echo "Updated Morning Start Time: $updatedMorningStartTime<br>";
    echo "Updated Morning End Time: $updatedMorningEndTime<br>";
    echo "Updated Evening Start Time: $updatedEveningStartTime<br>";
    echo "Updated Evening End Time: $updatedEveningEndTime<br>";

    // Update the database
    $updateQuery = "UPDATE `mess_owner` SET `Owner_name`='$updatedName', `Mob_no`='$updatedNumber' WHERE `Email`='$email'";
        

    $updates  = "UPDATE `mess`
    SET
        `Mess_name` = '$updatedMessName',
        
        `Address` = '$updatedMessAddress',
        `morningStartTime` = '$updatedMorningStartTime',
        `morningEndTime`= '$updatedMorningEndTime',
        `eveningStartTime` = '$updatedEveningStartTime',
        `eveningEndTime` = '$updatedEveningEndTime'

    WHERE
        Email = '$email'";

    $updateResult = mysqli_query($conn, $updateQuery);

    $updatesResult = mysqli_query($conn,$updates);

    if ($updateResult) {
        // Success message or redirect to a success page
        echo "Data updated successfully!";
    } else {
        // Handle the error
        echo "Error updating data: " . mysqli_error($conn);
    }


    if ($updatesResult) {
        // Success message or redirect to a success page
        echo "Data updated successfully!";
    } else {
        // Handle the error
        echo "Error updating data: " . mysqli_error($conn);
    }

    header("Location: dashboard.php");


?>


