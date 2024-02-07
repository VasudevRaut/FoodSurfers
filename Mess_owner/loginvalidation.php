<?php





















// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize the inputs (you might want to do more thorough validation)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Hash the password (assuming you're storing hashed passwords in the database)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Replace the following with your database connection code


    // Create a connection
    // $conn = new mysqli("localhost", "root", "", "foodsurfers");
    include 'db_con.php';

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve the hashed password from the database based on the provided email
    $sql = "SELECT password FROM mess_owner WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check the password
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];

        echo $password;

        echo $storedPassword;

        echo "Vasudev rautttttttttttttttttttt";

        if ($password==$storedPassword) {
            // Password is correct, redirect to the dashboard or wherever you want

            session_start();
            $_SESSION["user_id"] = $email;
            // $cookieValue = base64_encode($email);
            setcookie("session_id", session_id(), time() + (86400 * 30), "/");

            // $cookieValue = base64_encode($email);
            // setcookie("session_id", $cookieValue, time() + (86400 * 30), "/");
            

           
            header("Location: dashboard.php");
            exit();
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // User not found
        echo "User with this email does not exist.";
    }

    // Close the database connection
    $conn->close();
}
?>
