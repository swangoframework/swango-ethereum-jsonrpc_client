<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;
use Swango\Ethereum\JsonRPCClient\Method\web3;

/**
 *
 * @author fdrea
 * @property \Swango\Ethereum\JsonRPCClient\Method\web3\clientVersion $clientVersion
 * @property \Swango\Ethereum\JsonRPCClient\Method\web3\sha3 $sha3
 *
 */
class web3 {
    private $url;
    public function __construct(string $url) {
        $this->url = $url;
    }
    public function __get(string $key) {
        $classname = "web3\\$key";
        return new $classname($this->url);
    }
}
