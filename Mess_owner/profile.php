
<?php


session_start(); 
if(isset($_COOKIE['session_id']) && session_id() === $_COOKIE['session_id'])
{
    // header("Location: Mess_owner/login.php");

}
else
{
    
    
    header("Location: login.php");
    exit();

}
?>

<?php
// session_start(); 
// session_start(); // Start the session

include('../includes/header.php');
include('../includes/topbar.php');
include('../includes/sidebar.php');
// include('db_con.php');

if (isset($_SESSION["user_id"])) {
    $email = $_SESSION["user_id"];
}

// Assuming you have already established a database connection
// $con = new mysqli("localhost", "root", "", "foodsurfers");
include 'db_con.php';
// echo "VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV";
// $userId = "v@gmail.com";
$query = "SELECT `mess`.*,`mess_owner`.* FROM `mess_owner`,`mess` WHERE `mess_owner`.Email = `mess`.Email AND `mess`.Email= '$email'"; // Adjust the query based on your database structure
$result = mysqli_query($conn, $query);

if ($result) {
    $userData = mysqli_fetch_assoc($result);
    echo $userData['Email'];
    
} else {
    // Handle the error
}

?>

<style>
    .Update_button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }
</style>
<link rel="shortcut icon" href="Images/Logo.png" type="image/x-icon">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <form method="post" action="UpdateProfileAPI.php">
                            <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
                        </form>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper container">
            <div class="card border-0 align-items-center">
                <img src="../assests/dist/img/profilepage.jpg" alt="Image" class="img-fluid" style="height:80%;width:60%; align:center">
                <div class="card-content">
                    <h3>PROFILE</h3>
                </div>
            </div>
            <form action="UpdateProfileAPI.php" method="POST">
                <div class="formbold-input-flex">
                </div>
                <div class="formbold-mb-3">
                    <label for="name" class="formbold-form-label"> Name: </label>
                    <input type="text" name="name" id="name" value="<?php echo $userData['Owner_name']; ?>" class="formbold-form-input" />
                </div>

                <div>
                    <label for="email" class="formbold-form-label"> Email:</label>
                    <input type="text" name="email" id="email" value="<?php echo $userData['Email']; ?>" class="formbold-form-input" />
                </div>
                <div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="number" class="formbold-form-label"> Phone: </label>
                            <input type="number" name="number" id="number" value="<?php echo $userData['Mob_no']; ?>" class="formbold-form-input" />
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="mess_name" class="formbold-form-label"> Mess Name: </label>
                    <input type="text" name="mess_name" id="mess_name" value="<?php echo $userData['Mess_name']; ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-3">
                    <label for="mess_address" class="formbold-form-label"> Mess Address: </label>
                    <input type="text" name="mess_address" id="mess_address" value="<?php echo $userData['Address']; ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-3">
                    <h11>Morning start and End Time</h11>
                    <div class="time-container">
                        <input type="time" name="morningStartTime" placeholder="From Time" class="formbold-form-input" value="<?php echo $userData['morningStartTime']; ?>">
                        <input type="time" name="morningEndTime" placeholder="To Time" class="formbold-form-input" value="<?php echo $userData['morningEndTime']; ?>">
                    </div>
                    <br>

                    <h11>Evening Start and End Time</h11>
                    <div class="time-container">
                        <input type="time" name="eveningStartTime" placeholder="From Time" class="formbold-form-input" value="<?php echo $userData['eveningStartTime']; ?>">
                        <input type="time" name="eveningEndTime" placeholder="To Time" class="formbold-form-input" value="<?php echo $userData['eveningEndTime']; ?>">
                    </div>
                    <br>
                    <div class="type">
                        <label>
                            <input type="radio" name="Type" value="Veg"> Veg
                        </label>
                        <label>
                            <input type="radio" name="Type" value="Non-Veg"> NonVeg
                        </label>
                    </div>
                    <br>
                </div>

                <input type="submit" class="Update_button" name="update" value="Update">
            </form>
        </div>
    </div>
</div>

<?php
include('../includes/footer.php');
?>
