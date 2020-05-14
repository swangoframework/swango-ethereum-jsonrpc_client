<?php
namespace Swango\Ethereum\JsonRPCClient;
class Client extends \BaseClient {
    protected const TIMEOUT = 25, METHOD = 'POST';
    const API_VERSION = '2.0';
}