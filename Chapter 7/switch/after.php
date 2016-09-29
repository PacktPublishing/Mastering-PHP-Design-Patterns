<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/07/2016
 * Time: 03:52
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

class OutputClient
{
    private $output;

    public function __construct(Output $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput(array $data)
    {
        return $this->output->load($data);
    }
}

$client = new OutputClient(new JSON());
echo $client->loadOutput(array(1, 2));
