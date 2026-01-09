<?php
require "db.php";

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$stmt = $conn->prepare(
    "INSERT INTO Usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $nombre, $correo, $password);

echo $stmt->execute() ? "OK" : "ERROR";
?>