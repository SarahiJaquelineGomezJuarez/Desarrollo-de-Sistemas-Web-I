<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captura de Datos Personales</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="dive">
    <h1>CAPTURA DE DATOS PERSONALES</h1>
    <hr>
    <h2>INGRESA LOS DATOS QUE SE TE PIDEN POR FAVOR</h2>
    <hr>
    <p>Mi primera encuesta</p>
    <hr>
    <form action="resultados.php" method="post" style="text-align: center;">
      <label for="Nombre">Nombre:</label>
      <input type="text" name="Nombre" id="Nombre" placeholder="Ingresa tu nombre" required><br><br>
      <hr>
      <label for="Edad">Edad:</label>
      <input type="number" name="Edad" id="Edad" placeholder="Ingresa tu edad" required><br><br>
      <hr>
      <label for="Ciudad">Ciudad:</label>
      <input type="text" name="Ciudad" id="Ciudad" placeholder="Ingresa la ciudad donde vives" required><br><br>
       <hr>
      <label for="Pasatiempo">Pasatiempo:</label>
      <input type="text" name="Pasatiempo" id="Pasatiempo" placeholder="Ingresa tu pasatiempo favorito" required><br><br>
      <hr>
      <input type="submit" value="¡Ingresamos Datos!" class="centrado">

    </form>
  </div>
</body>
</html>

