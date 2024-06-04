<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Comentarios de clientes</title>
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
  <h1>Comentarios de clientes</h1>
    <div class="Div1">

      <?php include 'php/conexion.php'; ?>

      <table class="tabla">
        <th>Nombre</th>
        <th>Comentarios</th>
        <th></th>
        <th></th>

        <?php
        $selec=$con->query("SELECT * FROM contacto");
        while ($fila = $selec -> fetch_assoc()){?>
        <tr>
          <td> <?php echo $fila['Nombre']?></td>
          <td> <?php echo $fila['Comentario']?></td>
          <td> <a href ="editar_comentarios.php?nReferencia=<?php echo $fila['nReferencia'] ?>">Editar</a></td>
          <td><a href ="php/borrar.php?nReferencia=<?php echo $fila['nReferencia'] ?>">Borrar</a></td>
        </tr>
        <?php } ?>
      </table>
    </div>

    <div id="divform">
  <h3>Quiere dejarnos un comentario? puede hacerlo aqui</h3>
  <form action="php/conect_contacto.php" method="post">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="Nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group">
      <label for="correo">Correo electronico:</label>
      <input type="email" id="correo" name="Email" placeholder="Correo" required>
    </div>
    <div class="form-group">
      <label for="comentario">Ingrese su comentario:</label>
      <textarea name="Comentario" id="comentario" maxlength="255" required placeholder="Comentario"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" value="Comentar">
      <input type="reset" value="Vaciar">
    </div>
  </form>
</div>
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