<!-- Biel Martinez Caceres -->
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION['usuari'])) {
  header('Location: index.php');
}

  require_once '../vendor/autoload.php';

  $clientID = '837341924947-n4f74ur2q8cns0n76a823o9ilnnkaniq.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost:8080/M07-UF2-P5/Biel_Martinez_Pt05/index.php';
  /* Redireccio alternativa si es vol mostrar l'error, només fa un var_dump
  $redirectUri = 'http://localhost:8080/M07-UF2-P5/Biel_Martinez_Pt05/controlador/registrarGoogle.php'; */
  
  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");


// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  include_once('controlador.php');
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  //Inici de sessio que no funciona independentment de si el correu existeix a la bd o no
  iniciarSessio($email);
  // now you can use this profile info to create account in your website and make user logged in.
} else {

}
   
?>

