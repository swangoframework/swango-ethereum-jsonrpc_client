<?php
namespace Swango\Ethereum\JsonRPCClient;
use function Swlib\Http\stream_for;

abstract class Method extends \BaseClient {
    protected const TIMEOUT = 25, METHOD = 'POST';
    const API_VERSION = '2.0';
    protected $method, $params = [];
    public function __construct(string $url) {
        $this->makeClient(new \Swlib\Http\Uri($url));
    }
    public function setParams(array $params): Method {
        $this->params = $params;
        return $this;
    }
    public function sendHttpRequest(): \BaseClient {
        $this->client->withBody(
            stream_for(
                \Json::encode(
                    [
                        'jsonrpc' => self::API_VERSION,
                        'method' => str_replace('\\', '_', substr(static::class, 37)),
                        'params' => $this->params,
                        'id' => 1
                    ])));
        $this->client->withHeader('Content-Type', 'application/json');
        return parent::sendHttpRequest();
    }
    public function getResult() {
        if (! $this->request_sent)
            $this->sendHttpRequest();
        return \Json::decodeAsObject($this->recv()->body)->result;
    }
}
