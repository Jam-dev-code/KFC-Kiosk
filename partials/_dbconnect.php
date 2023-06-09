<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "kfckioskdb";

$conn = new mysqli($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
