<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../estils/estilsForm.css">
</head>

<header>
    <a href="../index.php">Tornar</a>
    <a href="../controlador/login.php">Login</a>
</header>

<form action="../controlador/registrar.php" method="post">
    Correu: <input type="text" name="usuari" value="<?php echo (isset($_POST['usuari']) ? $_POST['usuari'] : ''); ?>"> <?php echo isset($errors[0]) ? $errors[0] : ''; ?><br>
    Contrasenya: <input type="password" name="contrasenya" value="<?php echo (isset($_POST['contrasenya']) ? $_POST['contrasenya'] : ''); ?>"> <?php echo isset($errors[1]) ? $errors[1] : ''; ?><br>
    Repetir contrasenya: <input type="password" name="contrasenya2" value="<?php echo (isset($_POST['contrasenya2']) ? $_POST['contrasenya2'] : ''); ?>"> <?php echo isset($errors[2]) ? $errors[2] : ''; ?><br>
    <?php echo isset($errors[3]) ? $errors[3] : ''; ?><br>
    <input type="submit">
</form>