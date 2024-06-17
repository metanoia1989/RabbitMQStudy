<?php

use PhpAmqpLib\Connection\AMQPStreamConnection;

require_once __DIR__."/../vendor/autoload.php";


$mqConn = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $mqConn->channel();

$channel->queue_declare('hello', false, false, false, false);

echo " [*] Waiting for messages. To exit press CTRL+C\n";


$callback = function ($msg) {
    echo ' [x] Received ', $msg->body, "\n";
};

$channel->basic_consume('hello', '', false, false, false, false, $callback);

try {
    $channel->consume();
} catch (\Throwable $th) {
    echo $th->getMessage();
}