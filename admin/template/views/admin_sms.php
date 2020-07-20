<?php

require_once '../../../vendor/autoload.php';


$messagebird = new \MessageBird\Client('cpIuhbVdzih1fhRXotXbY7hXb');
$message     = new \MessageBird\Objects\Message();
$message->originator= 'SoukElMdina';
$message->recipients=array(+21658963594);
$message->body = $_POST['message'];

$messagebird->messages->create($message);

header('Location: ../afficher_admin.php');

?>