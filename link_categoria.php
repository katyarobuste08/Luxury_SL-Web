<?php
require "db.php";

$cat = $_POST["categoria_id"];
$proy = $_POST["proyecto_id"];

$stmt = $conn->prepare(
    "INSERT INTO Proyecto_has_categoria VALUES (?, ?)"
);
$stmt->bind_param("ii", $cat, $proy);

echo $stmt->execute() ? "OK" : "ERROR";
?>