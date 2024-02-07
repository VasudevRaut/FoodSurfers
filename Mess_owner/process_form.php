<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $messOwnerName = $_POST["messOwnerName"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $messName = $_POST["messName"];
    $messAddress = $_POST["messAddress"];
    $morningStartTime = $_POST["morningStartTime"];
    $morningEndTime = $_POST["morningEndTime"];
    $eveningStartTime = $_POST["eveningStartTime"];
    $eveningEndTime = $_POST["eveningEndTime"];
    $password = $_POST["password"];


    echo "Mess Owner Name: " . $messOwnerName . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Mobile: " . $mobile . "<br>";
    echo "Mess Name: " . $messName . "<br>";
    echo "Mess Address: " . $messAddress . "<br>";
    echo "Morning Start Time: " . $morningStartTime . "<br>";
    echo "Morning End Time: " . $morningEndTime . "<br>";
    echo "Evening Start Time: " . $eveningStartTime . "<br>";
    echo "Evening End Time: " . $eveningEndTime . "<br>";
    // echo "Mess Type: " . $messType . "<br>";



    // Perform validation (you can add more validation rules)
    if (empty($messOwnerName) || empty($email) || empty($mobile) || empty($messName) || empty($messAddress) || empty($morningStartTime) || empty($morningEndTime) || empty($eveningStartTime) || empty($eveningEndTime) || empty($password)) {
        echo "All fields are required!";
    } else {
        // TODO: Add your database connection code here (e.g., using mysqli or PDO)

        // Insert data into the database (example using mysqli)
        // $conn = new mysqli("localhost", "root", "", "foodsurfers");
        include 'db_con.php';

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO mess_owner (Owner_name, Email, Mob_no,password) VALUES ('$messOwnerName', '$email', '$mobile','$password')";


        $sql1 = "INSERT INTO mess (Email,Mess_name, Type, Address,morningStartTime,morningEndTime,eveningStartTime,eveningEndTime) VALUES ('$email','$messName',      '$messType', '$messAddress','$morningStartTime','$morningEndTime','$eveningStartTime','$eveningEndTime')";



        if ($conn->query($sql) === TRUE) {
            echo "Registration successful ownner ! ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        

        if ($conn->query($sql1) === TRUE) {
            echo "Registration successful mess!";
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }


        $conn->close();

        header("Location: dashboard.php");
        exit;
    }
}
?>
