<?php
require "db.php";

$sql = "SELECT p.proyecto_id, p.titulo, p.codigo_fuente_url, u.nombre
        FROM ProyectosArduino p
        JOIN Usuarios u ON p.usuario_id = u.usuario_id";

$res = $conn->query($sql);
echo json_encode($res->fetch_all(MYSQLI_ASSOC));
?>