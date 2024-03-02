<?php
include('db.php');

$sql = "SELECT * FROM marcas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style_index.css">
    <title>Inicio</title>
</head>
<header>
        <img src="images/logo.jpg" alt="Logo de tu empresa">
        <!-- <h1>Nombre de tu empresa</h1> -->
        <a href="form.php" class="btn btn-primary">Para Empresas</a>
        <nav>
        <ul>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<li><a href='productos.php?marca_id={$row['marca_id']}'>";
                echo "<img src='{$row['imagen_marca']}' alt='{$row['nombre_empresa']}'>";
                echo "</a></li>";
            }
            ?>
        </ul>
    </nav>
    </header>
<body>
<section id="carrusel">
        <?php
        // Incluye el archivo de conexión a la base de datos
        include 'db.php';

        // Realiza la consulta para obtener todos los productos
        $query = "SELECT * FROM productos";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='producto'>";
                // Verifica si 'imagen' está definido y no está vacío antes de acceder a él
                if (isset($row['imagen_producto']) && !empty($row['imagen_producto'])) {
                    echo "<img src='" . $row['imagen_producto'] . "' alt='" . $row['nombre_producto'] . "'>";
                } else {
                    echo "<img src='images/default.jpg' alt='Imagen por defecto'>";
                }

                echo "<h3>" . $row['nombre_producto'] . "</h3>";
                echo "<p>Precio: $" . $row['precio_producto'] . "</p>";
                // Verifica si 'link' está definido y no está vacío antes de mostrar el enlace
                if (isset($row['link']) && !empty($row['link'])) {
                    echo "<a href='" . $row['link'] . "'>Ver más</a>";
                }
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles en este momento.";
        }
        $conn->close();
        ?>
    </section>

    <!-- Scripts de JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
