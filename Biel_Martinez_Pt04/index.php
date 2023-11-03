<!-- Biel Martinez Caceres -->
<?php
include './controlador/controlador.php';
session_start();

try {
    $connexio = conectarBD();
    //Modificació d'atributs necessària per al funcionament del codi, això fa que quan insertem el numero del limit i el offset a la consulta s'insereixi com a int i no com a string
    $connexio->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    $pagina = 1;
    if (isset($_GET["pagina"])) {
        $pagina = $_GET["pagina"];

    }

    //Calculs de les variables que controlen les pagines i els articles per pagina
    $artPerPag = 40;
    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        if(!isset($_GET["artPerPag"])){
            $artPerPag=40;
        }else{
            $artPerPag=$_GET["artPerPag"];
            if($artPerPag>40 || $artPerPag<5){
                $artPerPag=5;
            }
        }
    }
    $limit = intval($artPerPag);
    $offset = intval(($pagina - 1) * $artPerPag);

    //Recompte del total d'articles per al calcul de les pagines
    $sentencia = $connexio->query("SELECT count(article) AS recompte FROM articles");
    $recompte = $sentencia->fetchObject()->recompte;
    //Comprovació de si el recompte d'articles és buit per fer la redirecció
    if ($recompte == 0 || empty($recompte)) {
        header("Location: ./Biel_Martinez_Pt04/");
    }
    $paginaT = ceil($recompte / $artPerPag);

    //Creació de l'array articles per guardar aquests
    $sentencia1 = $connexio->prepare("SELECT article FROM articles LIMIT ? OFFSET ?");
    $sentencia1->execute([$limit, $offset]);
    $articles = $sentencia1->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
require "./vista/index.vista.php";
