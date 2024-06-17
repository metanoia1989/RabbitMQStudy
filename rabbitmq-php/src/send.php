<?php

use PhpAmqpLib\Message\AMQPMessage;

require_once __DIR__."/../vendor/autoload.php";

$mq_conn = new \PhpAmqpLib\Connection\AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $mq_conn->channel();

$channel->queue_declare('hello', false, false, false, false);

$msg = new AMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!\n";

$channel->close();
$mq_conn->close();
