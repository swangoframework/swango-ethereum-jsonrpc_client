<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;

/**
 *
 * @author fdrea
 * @property \Swango\Ethereum\JsonRPCClient\Method\db\putString $putString
 * @property \Swango\Ethereum\JsonRPCClient\Method\db\getString $getString
 * @property \Swango\Ethereum\JsonRPCClient\Method\db\putHex $putHex
 * @property \Swango\Ethereum\JsonRPCClient\Method\db\getHex $getHex
 *
 */
class db {
    private $url;
    public function __construct(string $url) {
        $this->url = $url;
    }
    public function __get(string $key) {
        $classname = "Swango\\Ethereum\\JsonRPCClient\\Method\\db\\$key";
        return new $classname($this->url);
    }
}
