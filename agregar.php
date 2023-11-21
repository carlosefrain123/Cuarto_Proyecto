<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Formulario de Producto</title>
</head>

<body>

  <div class="container mt-5">
    <form action="insert.php" method="post">
      <h1 class="text-center">Agregar Producto</h1>
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
      </div>

      <div class="form-group">
        <label for="subtitulo">Subtítulo:</label>
        <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
      </div>

      <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input type="text" class="form-control" id="imagen" name="imagen" required>
      </div>

      <div class="form-group">
        <label for="rutaweb">Ruta Web:</label>
        <input type="text" class="form-control" id="rutaweb" name="rutaweb" required>
      </div>

      <div class="form-group">
        <select class="form-select" aria-label="Estado" name="est">
          <option selected disabled>Selecciona un estado</option>
          <option value="0">Inactivo</option>
          <option value="1">Activo</option>
        </select>

        <!--
          <label for="est">Est:</label>
        <input type="text" class="form-control" id="est" name="est" required>
        -->
      </div>
      <div class="form-group">
        <select class="form-select" aria-label="Estado" name="destacado">
          <option selected disabled>Selecciona si es Destacado</option>
          <option value="0">No Destacado</option>
          <option value="1">Destacado</option>
        </select>
        <!--
          <label for="destacado">Destacado:</label>
        <input type="text" class="form-control" id="destacado" name="destacado" required>
        -->
      </div>


      <div class="form-group">
        <label for="fecha">Fecha:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>