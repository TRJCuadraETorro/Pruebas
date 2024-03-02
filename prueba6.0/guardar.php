<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_empresa = $_POST['nombre_empresa'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    $tiempo_limite_horas = $_POST['tiempo_limite'];
    $tiempo_limite_horas = 0.0833333; // 5 minutos
    $link = $_POST['link'];

    // Subir la imagen de la marca
    $imagen_marca = $_FILES['imagen_marca']['name'];
    $imagen_marca_tmp = $_FILES['imagen_marca']['tmp_name'];
    $ruta_imagen_marca = "images/empresas/" . $imagen_marca;
    move_uploaded_file($imagen_marca_tmp, $ruta_imagen_marca);

    // Subir la imagen del producto
    $imagen_producto = $_FILES['imagen_producto']['name'];
    $imagen_producto_tmp = $_FILES['imagen_producto']['tmp_name'];
    $ruta_imagen_producto = "images/productos/" . $imagen_producto;
    move_uploaded_file($imagen_producto_tmp, $ruta_imagen_producto);

    $sql = "INSERT INTO marcas (nombre_empresa, imagen_marca) VALUES ('$nombre_empresa', '$ruta_imagen_marca')";
    $conn->query($sql);

    $marca_id = $conn->insert_id;

    $sql = "INSERT INTO productos (nombre_producto, precio_producto, link, imagen_producto, marca_id) 
            VALUES ('$nombre_producto', '$precio_producto', '$link', '$ruta_imagen_producto', '$marca_id')";
    $conn->query($sql);

    $conn->close();
    
    header("Location: index.php"); // Redireccionar a la página principal después de guardar
    exit();
}
?>
