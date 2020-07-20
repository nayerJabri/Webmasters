<?php

require_once '../../../vendor/autoload.php';


$messagebird = new \MessageBird\Client('NFIyAI5DXK1BEO7MbiScdKit1');
$message     = new \MessageBird\Objects\Message();
$message->originator= 'SoukElMdina';
$message->recipients=array(+21650190165);
$message->body = $_POST['message'];

$messagebird->messages->create($message);

header('Location: ../inbox.php');

?>