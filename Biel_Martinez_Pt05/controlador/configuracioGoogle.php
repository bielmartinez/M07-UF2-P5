<?php
  require_once '../vendor/autoload.php';


  $clientID = '837341924947-n4f74ur2q8cns0n76a823o9ilnnkaniq.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost:90/loginGoogle/perfil.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>