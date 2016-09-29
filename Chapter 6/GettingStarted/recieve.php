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

$channel->queue_declare(
    'sayHello',     // queue name
    false,          // passive
    false,          // durable
    false,          // exclusive
    false           // autodelete
);

$callback = function ($msg) {
    echo "Received: " . $msg->body . PHP_EOL;
};

$channel->basic_consume(
    'sayHello',                     // queue
    '',                             // consumer tag
    false,                          // no local
    true,                           // no ack
    false,                          // exclusive
    false,                          // no wait
    $callback                       // callback
);

while (count($channel->callbacks)) {
    $channel->wait();
}