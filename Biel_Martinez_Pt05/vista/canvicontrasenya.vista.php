<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../estils/estilsForm.css">
</head>

<header>
    <a href="../index.php">Tornar</a>
</header>

<form action="../controlador/canviContrasenya.php" method="post">
    Correu: <input type="text" name="correu" value="<?php if (isset($correu)) { echo $correu; } ?>" <?php echo isset($errors[0]) ? $errors[0] : ''; ?> <br>
    <input type="submit">
</form>