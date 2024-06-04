<?php
include 'php/conexion.php';
$numeroreferencia=$_REQUEST['nReferencia'];
$selec = $con -> query("SELECT * FROM contacto WHERE nReferencia='$numeroreferencia'");
if ($fila = $selec->fetch_assoc());{

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editar comentario</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="header">
    <img src="Images/Logo_Positivo.png" alt="Logo" class="logo" onclick="location.href='index.html'">
    <a href="index.html" class="logo-title">Colchoneria "Dylan's Comfort" <br> <span>Parte del multigrupo "Dylan's House"</span></a>
  </div>
  
  <div class="sub-header">
    <input type="checkbox" id="sub-header-toggle">
    <label for="sub-header-toggle" class="sub-header-toggle">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <ul>
      <li><a href="index.html" class="animated-link">Inicio</a></li>
      <li><a href="principal.html" class="animated-link">Productos</a></li>
      <li><a href="contacto.html" class="animated-link">Acerca de nosotros</a></li>
      <li><a href="reseñas.php" class="animated-link">Reseñas de otros clientes</a></li>
    </ul>
  </div>
  
  <main>
  <form action="php/updates.php" method="post" class="form-group">
  <div class="Div1">
    <input type="hidden" name="nReferencia" value="<?php echo $numeroreferencia?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="new_Nombre" required value="<?php echo $fila['Nombre']?>">
  </div>
  <div class="Div1">
    <input type="submit" value="Actualizar">
  </div>
</form>
  </main>
  
  <footer>
    <a href="https://www.instagram.com/quiero_arder/" target="_blank">
      <img src="Images/instagram.png" alt="Instagram Icon" class="instagram-icon">
    </a>
    <p>&copy; 2024 Dylan's House</p>
    <button class="back-to-top" onclick="window.scrollTo(0, 0)">Inicio de pagina</button>
    <a href="privacy-policy.html" class="privacy-policy">Politicas de privacidad</a>
  </footer>
  <script src="script.js"></script>
</body>
</html>
