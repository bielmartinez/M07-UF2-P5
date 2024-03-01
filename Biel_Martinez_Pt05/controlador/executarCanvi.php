<!-- Biel Martinez Caceres -->
<?php
require 'controlador.php';
$connexio = conectarBD();

//S'agafen els valors correu i token d'abans
$correu = $_POST["correu"];
$token = $_POST["token"];


//Es comprova que existeixi el correu i tingui assignat el token que s'ha fet servir
$statement1 = $connexio->prepare("SELECT COUNT(*) FROM usuaris WHERE usuari = ? AND token = ?");
$statement1->execute([$correu, $token]);
$tokenCorrecte = $statement1->fetchAll(PDO::FETCH_ASSOC);

//Si el token és vàl·lid permet canviar de contrasenya, si no no
if ($tokenCorrecte[0]["COUNT(*)"] == 1) {
    $novaC = $_POST["contrasenya"];
    $novaC2 = $_POST["contrasenya2"];
    //Comprovacio de que las contrasenyes coincideixin
    if ($novaC == $novaC2) {
        $novaC = password_hash($novaC, PASSWORD_DEFAULT);
        $statement2 = $connexio->prepare("UPDATE `usuaris` SET `contrasenya`= ? WHERE `usuari` = ?");
        $statement2->execute([$novaC, $correu]);
        echo "La contrasenya s'ha canviat correctament";
    } else {
        echo "Les contrasenyes han de coincidir";
    }
} else {
    echo "Token incorrecte";
}
?>