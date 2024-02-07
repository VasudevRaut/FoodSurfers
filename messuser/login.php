<?php



session_start();

// echo "VAsudevvvvvvvvvvvvvvvv";
if(isset($_COOKIE['session_id_user']) && session_id() === $_COOKIE['session_id_user'])
{


    if (isset($_SESSION["user_id_email"])) {
        $email = $_SESSION["user_id_email"];
        // echo "User Email: " . $email;

    }
    // echo $_COOKIE['session_id_user'];
    header("Location: ../dashboard.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "foodsurfers");

// echo "VAsudevvvvvvvvvvvvvvvv";


// Hash the new password before updating (assuming you are using password_hash)
// $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// SQL update query
// $sql = "UPDATE mess_owner SET password='$newPassword' WHERE Email='$email'";

// Execute the query
// if ($conn->query($sql) === TRUE) {
//     echo "Password updated successfully";
// } else {
//     echo "Error updating password: " . $conn->error;
// }

?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signup.css">
    <title>Login Form Using HTML And CSS Only</title>

    <style>

        .overlay-container
        {
            padding: 30px;
        }
        input
        {
            border-radius: 10px;
        }

    </style>


</head>

<body>
    <!-- <h1>vasudddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h1> -->
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="loginvalidation.php" method="post">
                <h1>User Login</h1>
                </br>
                </br>
                </br>

                <!-- <input type="text" name="messOwnerName" placeholder="Mess Owner Name" /> -->
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <br>
                
                <button>Log in</button>
                <br>    
                <footer class="signup-footer">
                    <p>Dont have an account? <a href="signup.php">Signup</a></p>
                </footer>


        </div>
        <div class="overlay-container">
       

<!-- 
                <input type="text" name="messName" placeholder="Mess Name" />
                <input type="text" name="messAddress" placeholder="Mess Address" />
                <br>
                <h11>Morning start and End Time</h11>
                <div class="time-container">

                    <input type="time" name="morningStartTime" placeholder="Morning From Time">
                    <input type="time" name="morningEndTime" placeholder="Morning To Time">
                </div>
                <br>

                <h11>Evening Start and End Time</h11>
                <div class="time-container">

                    <input type="time" name="eveningStartTime" placeholder="Evening From Time">
                    <input type="time" name="eveningEndTime" placeholder="Evening To Time">
                </div>
                <br>
                <div class="type">
                    <div class="type">
                        <label>
                            <input type="radio" name="messType" value="Veg"> Veg
                        </label>
                        <label>
                            <input type="radio" name="messType" value="Non-Veg"> NonVeg
                        </label>
                    </div>
                </div>
                <br> -->


                <img src="../Images/Delivery-boy.png" alt="" width="100%">

                
            </form>
        </div>
    </div>
</body>

</html>