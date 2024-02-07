<?php


// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
// session_destroy();
unset($_SESSION['user_id']);

// Delete the session cookie
setcookie("session_id", "", time() - 3600, "/");

// Redirect to the logout success page or any other page
header("Location: login.php");
exit();


?>