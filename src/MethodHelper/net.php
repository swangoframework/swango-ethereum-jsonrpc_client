<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;
use Swango\Ethereum\JsonRPCClient\Method\net;

/**
 *
 * @author fdrea
 * @property \Swango\Ethereum\JsonRPCClient\Method\net\listening $listening
 * @property \Swango\Ethereum\JsonRPCClient\Method\net\peerCount $peerCount
 * @property \Swango\Ethereum\JsonRPCClient\Method\net\version $version
 *
 */
class net {
    private $url;
    public function __construct(string $url) {
        $this->url = $url;
    }
    public function __get(string $key) {
        $classname = "net\\$key";
        return new $classname($this->url);
    }
}
