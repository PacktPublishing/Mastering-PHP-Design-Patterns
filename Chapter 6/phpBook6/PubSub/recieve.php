<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 02/07/2016
 * Time: 01:48
 */

require_once(__DIR__ . '/vendor/autoload.php');
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'junade', 'insecurepassword');
$channel    = $connection->channel();

$channel->exchange_declare(
    'helloHello',   // exchange
    'fanout',       // exchange type
    false,          // passive
    false,          // durable
    false           // auto-delete
);

$callback = function ($msg) {
    echo "Received: " . $msg->body . PHP_EOL;
};

list($queueName, ,) = $channel->queue_declare("", false, false, true, false);

$channel->queue_bind($queueName, 'helloHello');

$channel->basic_consume($queueName, '', false, true, false, false, $callback);

while (count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();