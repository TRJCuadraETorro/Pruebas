<!DOCTYPE html>
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
</html>
