<!-- Biel Martinez Caceres -->
<?php
//Funcio per conectar amb la BD mitjançant PDO
function conectarBD()
{
    $connexio = new PDO('mysql:host=localhost;dbname=pt05_Biel_Martinez', 'root', '');
    return $connexio;
}

//Funcio per evitar injeccio de codi als formularis
function arreglarDades($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

//Funcio per iniciar sessio una vegada s han introduit les dades
function iniciarSessio($usuari)
{
    session_start();
    $_SESSION["user"] = $usuari;
}

// Funció para comprobar si existeix el usuari a la BD
function comprovarUsuari($connexio, $usuari)
{
    $comprovacio = $connexio->prepare("SELECT usuari FROM usuaris WHERE usuari = ?");
    $comprovacio->execute([$usuari]);
    $comprovacioBoolea = $comprovacio->fetchAll(PDO::FETCH_OBJ);

    return $comprovacioBoolea;
}
?>