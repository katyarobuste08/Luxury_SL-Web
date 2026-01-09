<?php
require "db.php";

$nombre = $_POST["nombre"];
$padre = $_POST["padre"] ?? null;

$stmt = $conn->prepare(
    "INSERT INTO Categorias (nombre_categoria, categoria_padre_id) VALUES (?, ?)"
);
$stmt->bind_param("si", $nombre, $padre);
echo $stmt->execute() ? "OK" : "ERROR";
?>