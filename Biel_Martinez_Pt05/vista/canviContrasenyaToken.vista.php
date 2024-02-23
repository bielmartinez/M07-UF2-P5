<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../estils/estilsForm.css">
</head>

<header>
</header>

<form action="../controlador/canviContrasenya.php" method="post">
    Nova contrasenya: <input type="password" name="contrasenya" value="<?php echo (isset($_POST['contrasenya']) ? $_POST['contrasenya'] : ''); ?>"> <?php echo isset($errors[1]) ? $errors[1] : ''; ?><br>
    Repetir contrasenya: <input type="password" name="contrasenya2" value="<?php echo (isset($_POST['contrasenya2']) ? $_POST['contrasenya2'] : ''); ?>"> <?php echo isset($errors[2]) ? $errors[2] : ''; ?><br>
    <?php echo isset($errors[3]) ? $errors[3] : ''; ?><br>
    <input type="submit">
</form>