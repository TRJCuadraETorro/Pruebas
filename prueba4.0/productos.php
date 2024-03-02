<?php
include('db.php');

if (isset($_GET['marca_id'])) {
    $marca_id = $_GET['marca_id'];

    $sql_marca = "SELECT * FROM marcas WHERE marca_id = $marca_id";
    $result_marca = $conn->query($sql_marca);
    $row_marca = $result_marca->fetch_assoc();

    $sql_productos = "SELECT * FROM productos WHERE marca_id = $marca_id";
    $result_productos = $conn->query($sql_productos);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_productos.css">
    <title>Productos</title>
</head>
<body>
    <header>
        <h1>Productos de <?php echo $row_marca['nombre_empresa']; ?></h1>
        <a href="index.php">Volver a la página principal</a>
    </header>

    <section>
        <ul class="productos-list">
            <?php
            while ($row_producto = $result_productos->fetch_assoc()) {
                echo "<li>";
                echo "<img src='{$row_producto['imagen_producto']}' alt='{$row_producto['nombre_producto']}'>";
                echo "<h2>{$row_producto['nombre_producto']}</h2>";
                echo "<p>Precio: {$row_producto['precio_producto']}</p>";
                echo "<a href='{$row_producto['link']}' target='_blank'>Ver producto</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
