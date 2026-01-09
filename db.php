<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "prueba";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error BD");
}
$conn->set_charset("utf8mb4");
session_start();
?>