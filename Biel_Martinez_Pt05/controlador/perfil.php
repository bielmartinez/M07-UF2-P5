<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>
<body>
   <?php
  require_once ('autentificacio.php');
?>
 
  <div class="perfil">
    <img src="imagenes/foto.png" alt="">
    <h2>Bienvenido <?php echo $name ?></h2>
    <h3><?php echo $email?></h3>
  </div>
</body>
</html>
