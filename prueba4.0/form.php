<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style_form.css">
    <title>Registro de Empresa</title>
</head>
<body>
    <!-- <header>

    </header> -->
<div class="container">
    <h1>Registro de Empresa</h1>
    <form id="registration-form">
        <form class="form-gorup">
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
        </form>
    </form>
    
</div>

<!-- <div class="container">
        <h2>Registro de Empresa</h2>
        <form id="registration-form">
            <div class="form-group">
                <label for="nombre_empresa">Nombre de la Empresa:</label>
                <input type="text" id="nombre_empresa" name="nombre_empresa" required>
            </div>
            <div class="form-group">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
            </div>
            <div class="form-group">
                <label for="precio_producto">Precio del Producto:</label>
                <input type="text" id="precio_producto" name="precio_producto" required>
            </div>
            <div class="form-group">
                <label for="imagen_empresa">Imagen de la Empresa:</label>
                <input type="file" id="imagen_empresa" name="imagen_empresa" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="imagen_producto">Imagen del Producto:</label>
                <input type="file" id="imagen_producto" name="imagen_producto" accept="image/*" required>
            </div>
            <button type="submit" class="btn">Registrar</button>
        </form>
    </div> -->
    

    <script src="js/script.js"></script>
</body>
</html>
