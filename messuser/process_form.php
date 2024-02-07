<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    


    echo "Mess Owner Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Mobile: " . $phone . "<br>";
    echo "Mess Name: " . $password . "<br>";
    echo "Mess Address: " . $address . "<br>";
    



    // Perform validation (you can add more validation rules)
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($password) ) {
        echo "All fields are required!";
    } else {
        // TODO: Add your database connection code here (e.g., using mysqli or PDO)

        // Insert data into the database (example using mysqli)
        // $conn = new mysqli("localhost", "root", "", "foodsurfers");
        include 'db_con.php';
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO customer (Cust_name, Email, Address,Mob_no,password) VALUES ('$name', '$email', '$address','$phone','$password')";


        // $sql1 = "INSERT INTO mess (Email,Mess_name, Type, Address,morningStartTime,morningEndTime,eveningStartTime,eveningEndTime) VALUES ('$email','$messName',      '$messType', '$messAddress','$morningStartTime','$morningEndTime','$eveningStartTime','$eveningEndTime')";



        if ($conn->query($sql) === TRUE) {
            echo "Registration successful ownner ! ";
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        

       


        $conn->close();

        header("Location: login.php");
        exit;
    }
}
?>
