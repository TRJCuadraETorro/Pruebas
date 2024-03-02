<?php
include('db.php');

// Obtener la fecha y hora actual
$now = date('Y-m-d H:i:s');

// Calcular la fecha y hora hace 5 minutos
$tiempo_limite = date('Y-m-d H:i:s', strtotime('-5 minutes', strtotime($now)));

// Eliminar los productos creados hace más de 5 minutos
$sql = "DELETE FROM productos WHERE fecha_creacion < '$tiempo_limite'";
$conn->query($sql);

$conn->close();
?>
