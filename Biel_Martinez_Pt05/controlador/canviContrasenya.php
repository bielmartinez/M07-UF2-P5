<!-- Biel Martinez Caceres -->
<?php
require 'controlador.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$connexio = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correu = arreglarDades($_POST['correu']);

    // Es comprova si el correu es buit i si existeix a la BD
    if (empty($correu)) {
        $errors[0] = "El camp correu està buit";
    } else {
        $correuComprovacio = comprovarUsuari($connexio, $correu);
        if ($correuComprovacio) {
            // Generació de token
            $token = bin2hex(openssl_random_pseudo_bytes(16));
            $updateToken = $connexio->prepare("UPDATE `usuaris` SET `token` = ? WHERE `correu` = ?");
            $updateToken->execute([$token, $correu]);

            // Aquí aniria el codi per enviar el correu quan prepari la funció


            mail($to, $subject, $message, $headers);

            echo "Correu enviat";
        } else {
            echo "El correu introduït no existeix";
        }
    }
}

//funcio del mailer
function enviarCorreu($nomC, $correuC, $textC)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bielmailerphp@gmail.com';
        $mail->Password   = ;
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('bielmailerphp@gmail.com', 'Biel');
        $mail->addAddress($correuC);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Practica PHPMailer Biel Martínez';
        $mail->Body    = 'Nom: ' . $nomC . '<br/> Text: ' . $textC;

        $mail->send();
        echo 'Enviat correctament';
    } catch (Exception $e) {
        echo "El correu no s'ha enviat. Mailer Error: {$mail->ErrorInfo}";
    }
}

include '../vista/canviContrasenya.vista.php';