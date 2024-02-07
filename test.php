<?php 

session_start();
$_SESSION['location'] = "sainagar";
header("Location: dashboard.php");
exit();


// echo "Vasudev";



?>