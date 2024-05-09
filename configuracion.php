<?php
    require_once 'vendor/autoload.php';

    $clientID = '1025750292308-8c4lfhncvk5l11afo5h72mt2dqdnsuc5.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirecUri = 'http://localhost/proyectos_xampp/Desarrollo_Backend/Participantes/bienvenida.php';

    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirecUri);
    $client->addScope("email");
    $client->addScope("profile");
?>