<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 03:51
 */

interface Output
{
    public function load(array $data);
}

class Serial implements Output
{
    public function load(array $data)
    {
        return serialize($data);
    }
}

class JSON implements Output
{
    public function load(array $data)
    {
        return json_encode($data);
    }
}

class XML implements Output
{
    public function load(array $data)
    {
        return xmlrpc_encode($data);
    }
}

$client = "JSON";

switch ($client) {
    case "Serial":
        $client = new Serial();
        break;
    case "JSON":
        $client = new JSON();
        break;
    case "XML":
        $client = new XML();
        break;
}

echo $client->load(array(1, 2));