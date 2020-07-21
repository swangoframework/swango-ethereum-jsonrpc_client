<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;

/**
 *
 * @author fdrea
 * @property \Swango\Ethereum\JsonRPCClient\MethodHelper\web3 $web3
 * @property \Swango\Ethereum\JsonRPCClient\MethodHelper\db $db
 * @property \Swango\Ethereum\JsonRPCClient\MethodHelper\eth $eth
 * @property \Swango\Ethereum\JsonRPCClient\MethodHelper\net $net
 * @property \Swango\Ethereum\JsonRPCClient\MethodHelper\shh $shh
 *
 */
class MethodHelper {
    private $url;
    public function __construct(string $url) {
        $this->url = $url;
    }
    public function __get(string $key) {
        $classname = "Swango\\Ethereum\\JsonRPCClient\\MethodHelper\\$key";
        return new $classname($this->url);
    }
}