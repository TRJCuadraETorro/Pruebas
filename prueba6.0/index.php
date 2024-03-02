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
        <!-- <img src="images/logo.jpg" alt="Logo de tu empresa"> -->
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
    <div id="search-container"> <!-- Contenedor para centrar -->
            <div id="search-bar">
                <input type="text" id="search-input" placeholder="Buscar productos">
                <button id="search-button">Buscar</button>
            </div>
    </div>
<section id="carrusel">
        <?php
        // Incluye el archivo de conexión a la base de datos
        include 'db.php';

        // Realiza la consulta para obtener todos los productos
        $query = "SELECT * FROM productos";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Envuelve cada viñeta de producto en un enlace que redirige al enlace del producto
                echo "<a href='" . $row['link'] . "' class='producto'>";
                echo "<div class='producto-inner'>";
                // Resto del contenido de la viñeta de producto como antes
                echo "<img src='" . $row['imagen_producto'] . "' alt='" . $row['nombre_producto'] . "'>";
                echo "<h3>" . $row['nombre_producto'] . "</h3>";
                echo "<p>Precio: $" . $row['precio_producto'] . "</p>";
                echo "</div>";
                echo "</a>";
            }
        } else {
            echo "No hay productos disponibles en este momento.";
        }
        $conn->close();
        ?>
    </section>

    <!-- Scripts de JavaScript -->
    <script src="js/script.js"></script>
    <script>
        // Función para filtrar productos en tiempo real
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search-input');
            const productos = document.querySelectorAll('.producto');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.toLowerCase();

                productos.forEach(function (producto) {
                    const nombreProducto = producto.querySelector('h3').textContent.toLowerCase();
                    if (nombreProducto.includes(searchTerm)) {
                        producto.style.display = 'block';
                    } else {
                        producto.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
