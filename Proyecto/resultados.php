<?php 
 $Nombre = isset($_POST['Nombre']) ? htmlspecialchars($_POST['Nombre']) : '';
$Edad = isset($_POST['Edad']) ? htmlspecialchars($_POST['Edad']) : '';
$Ciudad = isset($_POST['Ciudad']) ? htmlspecialchars($_POST['Ciudad']) : '';
$Pasatiempo = isset($_POST['Pasatiempo']) ? htmlspecialchars($_POST['Pasatiempo']) : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultados de Datos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script>
    function mostrarPopup() {
      document.getElementById("popUpBox").style.display = "block";
      document.getElementById("popUpOverlay").style.display = "block";
    }

    function cerrarPopup() {
      document.getElementById("popUpBox").style.display = "none";
      document.getElementById("popUpOverlay").style.display = "none";
    }

    function redirigirFormulario() {
      window.location.href = "index.php";
    }
  </script>
</head>
<body>

  <div class="dive2">
    <h1>Resultados</h1>
    <br> 
    <img src="img/Snoopy.jpg" alt="Snoopy" width="300" class="centrada">
    <br><br>
    <p><strong>Nombre:</strong> <?php echo $Nombre; ?></p>
       <p><strong>Edad:</strong> <?php echo $Edad; ?></p>
       <p><strong>Ciudad:</strong> <?php echo $Ciudad; ?></p>
       <p><strong>Pasatiempo:</strong> <?php echo $Pasatiempo; ?></p>
       <h2>¡Bien Hecho!</h2>
    <br>
    <button class="centrado" onclick="mostrarPopup()">¡Volver a Ingresar!</button>
  </div>

  <div id="popUpOverlay" style="display: none;"></div>
  <div id="popUpBox" style="display: none;">
    <div id="box">
      <i class="fas fa-question-circle fa-5x"></i>
      <h1>¿Volver a ingresar datos?</h1>
      <button onclick="redirigirFormulario()">Sí, volver</button>
      <button onclick="cerrarPopup()">Cancelar</button>
    </div>
  </div>

  <script src="js/apps.js"></script>
</body>
</html>
