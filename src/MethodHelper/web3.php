<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;

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
        $classname = "Swango\\Ethereum\\JsonRPCClient\\Method\\web3\\$key";
        return new $classname($this->url);
    }
}
