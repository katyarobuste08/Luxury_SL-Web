<?php
require "db.php";

$correo = $_POST["correo"];
$password = $_POST["password"];

$stmt = $conn->prepare(
    "SELECT usuario_id, nombre, contraseña FROM Usuarios WHERE correo=?"
);
$stmt->bind_param("s", $correo);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 1) {
    $u = $res->fetch_assoc();
    if (password_verify($password, $u["contraseña"])) {
        $_SESSION["id"] = $u["usuario_id"];
        $_SESSION["nombre"] = $u["nombre"];
        echo "OK";
    } else echo "PASS_ERROR";
} else echo "NO_USER";
?>