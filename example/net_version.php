<?php
ini_set('display_errors', 'On');
include __DIR__ . '/../vendor/autoload.php';
go(
    function () {
        $client = Swango\Ethereum\JsonRPCClient::api('http://172.17.0.1:8545/')->net->version->sendHttpRequest();
        var_dump($client->getResult());
    });