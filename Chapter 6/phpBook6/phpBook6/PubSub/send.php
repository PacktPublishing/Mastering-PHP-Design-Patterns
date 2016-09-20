<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 02/07/2016
 * Time: 00:59
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

$msg = new AMQPMessage("Hello world!");

$channel->basic_publish(
    $msg,           // message
    'helloHello'    // exchange
);

$channel->close();
$connection->close();

echo "Sent hello world message." . PHP_EOL;