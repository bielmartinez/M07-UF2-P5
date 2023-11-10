<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../estils/estilsForm.css">
</head>

<header>
    <a href="../index.php">Tornar</a>
</header>

<form action="../controlador/login.php" method="post">
    Usuari: <input type="text" name="usuari" value="<?php if (isset($usuari)) { echo $usuari; } ?>" <?php echo isset($errors[0]) ? $errors[0] : ''; ?> <br>
    Contrasenya: <input type="password" name="contrasenya" value="<?php if (isset($contrasenya)) { echo $contrasenya; } ?>"> <?php echo isset($errors[1]) ? $errors[1] : ''; ?><br>
    <input type="submit">
</form>