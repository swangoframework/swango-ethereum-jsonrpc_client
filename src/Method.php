<?php
namespace Swango\Ethereum\JsonRPCClient;
abstract class Method extends Client {
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
            \Json::encode(
                [
                    'jsonrpc' => self::API_VERSION,
                    'method' => $this->method,
                    'params' => $this->params,
                    'id' => 1
                ]));
        return parent::sendHttpRequest();
    }
    public function getResult() {
        if (! $this->request_sent)
            $this->sendHttpRequest();
        return \Json::decodeAsObject($this->recv()->body)->result;
    }
}
