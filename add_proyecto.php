<?php
require "db.php";
if (!isset($_SESSION["id"])) die("NO_AUTH");

$titulo = $_POST["titulo"];
$url = $_POST["url"];
$user = $_SESSION["id"];

$stmt = $conn->prepare(
    "INSERT INTO ProyectosArduino (titulo, codigo_fuente_url, usuario_id)
     VALUES (?, ?, ?)"
);
$stmt->bind_param("ssi", $titulo, $url, $user);

echo $stmt->execute() ? "OK" : "ERROR";
?>