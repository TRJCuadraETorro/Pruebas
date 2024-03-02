<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro de Empresa</title>
</head>
<body>
    <header>
        <h1>Registro de Empresa</h1>
    </header>

    <form action="guardar.php" method="post" enctype="multipart/form-data">
        <label for="nombre_empresa">Nombre de la Empresa:</label>
        <input type="text" name="nombre_empresa" required>

        <label for="nombre_producto">Nombre del Producto:</label>
        <input type="text" name="nombre_producto" required>

        <label for="precio_producto">Precio del Producto:</label>
        <input type="number" name="precio_producto" step="0.01" required>

        <label for="link">Enlace del Producto:</label>
        <input type="url" name="link" required>

        <label for="imagen_marca">Imagen de la Marca:</label>
        <input type="file" name="imagen_marca" accept="image/*" required>

        <label for="imagen_producto">Imagen del Producto:</label>
        <input type="file" name="imagen_producto" accept="image/*" required>

        <input type="submit" value="Registrar">
    </form>

    <script src="js/script.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="url"],
        input[type="file"] {
            width: 96%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
    <title>Registro de Empresa</title>
</head>
<body>
    <div class="container">
        <h1>Registro de Empresa</h1>
        <form action="guardar.php" method="post" enctype="multipart/form-data">
            <label for="nombre_empresa">Nombre de la Empresa:</label>
            <input type="text" name="nombre_empresa" required>

            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" name="nombre_producto" required>

            <label for="precio_producto">Precio del Producto:</label>
            <input type="number" name="precio_producto" step="0.01" required>

            <label for="link">Enlace del Producto:</label>
            <input type="url" name="link" required>

            <label for="imagen_marca">Imagen de la Marca:</label>
            <input type="file" name="imagen_marca" accept="image/*" required>

            <label for="imagen_producto">Imagen del Producto:</label>
            <input type="file" name="imagen_producto" accept="image/*" required>
            <!-- Opción de tiempo límite (desde 5 minutos hasta 30 días) -->
            <label for="tiempo_limite">Tiempo Límite (minutos):</label>
            <select name="tiempo_limite" required>
            <?php
                for ($i = 5; $i <= 60 * 24 * 30; $i += 5) {
                    echo "<option value='$i'>" . ($i < 60 ? $i . " minutos" : ($i / 60) . " horas") . "</option>";
                }
            ?>
        </select>
            <!-- Barra de progreso -->
            <div class="progress">
             <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <style>
            .progress {
                height: 20px;
                margin-bottom: 15px;
                overflow: hidden;
                background-color: #f8f9fa;
                border-radius: 5px;
            }

            .progress-bar {
                background-color: #007bff;
                width: 0;
                transition: width 0.5s ease;
            }
            </style>

            <input type="submit" value="Registrar">
        </form>
    </div>
    <?php
    // Llamar al script de eliminación después de guardar el producto
    include('eliminar_productos.php');
    ?>
</body>
</html>
