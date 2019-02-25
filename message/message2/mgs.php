<?php
require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic(d1c50cf5 , zE2elJ0nv2nzV7hE);
$client = new \Nexmo\Client($basic);
$message = $client->message()->send([
    'to' => 918149684218,
    'from' => 'Acme Inc',
    'text' => 'A text message sent using the Nexmo SMS API hello'
]);

var_dump($message->getResponseData());
?>