<?php
include('db.php');

$sql = "SELECT * FROM marcas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_index.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <img src="images/logo.jpg" alt="Logo de tu empresa">
        <h1>Nombre de tu empresa</h1>
        <a href="form.php" class="para-empresas">Para Empresas</a>
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
    <section>
        <!-- Contenido principal -->
        <link rel="stylesheet" href="css/styles.css">
        <ul class="c-accordion">
            <li id="cf" class="c-accordion__item" style="--cover: url(https://fusion-universal-assets-production.s3.amazonaws.com/file-host/5af42070-0533-49eb-9822-934eebf32cb7--1399798036194765884-/8/Customer-facing-1.png)">
                <a href="#cf" class="c-accordion__action">
                    <div class="c-accordion__content">
                        <h2 class="c-accordion__title c-accordion__title--hero c-accordion__title--hover-show">CUSTOMER FACING</h2>
                        <p class="c-accordion__description">Click the appropriate job role below if ....</p>
                    </div>
                    <div class="c-accordion__aside">
                        <h2 class="c-accordion__title c-accordion__title--hover-hide">CUSTOMER FACING</h2>
                    </div>
                </a>
            </li>
        </ul>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
