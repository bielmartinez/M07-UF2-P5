<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../estils/estilsForm.css">
</head>

<header>
    <a href="../index.php">Tornar</a>
    <a href="../controlador/registrar.php">Registrar</a>
</header>

<form action="../controlador/login.php" method="post">
    Correu: <input type="text" name="usuari" value="<?php if (isset($usuari)) { echo $usuari; } ?>" <?php echo isset($errors[0]) ? $errors[0] : ''; ?> <br>
    Contrasenya: <input type="password" name="contrasenya" value="<?php if (isset($contrasenya)) { echo $contrasenya; } ?>"> <?php echo isset($errors[1]) ? $errors[1] : ''; ?><br>
    <input type="submit">
    <div class="enlace">
         <?php require ('autentificacio.php')?>
        <a href="<?php echo $client->createAuthUrl() ?>">Iniciar sesión con Google</a>
      </div>
</form>

<a href="../controlador/canviContrasenya.php">
Has oblidat la teva contrasenya? 
</a>