<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "foodsurfers";



$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn)
{
    $response['message'] = "connection_error";
    echo json_encode($response);
}

?>