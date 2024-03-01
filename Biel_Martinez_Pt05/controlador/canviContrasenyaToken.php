<!-- Biel Martinez Caceres -->
<?php
require 'controlador.php';

$connexio = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["correu"])) {
    //S'agafen els valors de la url per la que s'ha entrat
    $correu = $_GET["correu"];
    $token = $_GET["token"];
    //Es comprova que no hi hagi tokens expirats a la BD
    $statement = $connexio->prepare("UPDATE usuaris set token = NULL, expire = NULL WHERE expire < NOW();");
    $statement->execute();

    echo $correu;

    //Es comprova que existeixi el correu i tingui assignat el token que s'ha fet servir
    $statement1 = $connexio->prepare("SELECT COUNT(*) FROM usuaris WHERE usuari = ? AND token = ?");
    $statement1->execute([$correu, $token]);
    $tokenCorrecte = $statement1->fetchAll(PDO::FETCH_ASSOC);

    //Si el token és vàl·lid permet canviar de contrasenya, si no no
    if ($tokenCorrecte[0]["COUNT(*)"] == 1) {
        echo "Token valid";
    } else {
        die("Token incorrecte");
    }
}
require "../vista/canviContrasenyaToken.vista.php"
?>