<!-- Biel Martinez Caceres -->
<?php
//Codi per eliminar la sessio
session_start();
unset($_SESSION["user"]);
header("Location:../index.php"); ?>