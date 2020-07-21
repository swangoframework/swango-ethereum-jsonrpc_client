<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;

/**
 *
 * @author fdrea
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\addToGroup $addToGroup
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\getMessages $getMessages
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\newFilter $newFilter
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\newIdentity $newIdentity
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\uninstallFilter $uninstallFilter
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\getFilterChanges $getFilterChanges
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\hasIdentity $hasIdentity
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\newGroup $newGroup
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\post $post
 * @property \Swango\Ethereum\JsonRPCClient\Method\shh\version $version
 *
 */
class shh {
    private $url;
    public function __construct(string $url) {
        $this->url = $url;
    }
    public function __get(string $key) {
        $classname = "Swango\\Ethereum\\JsonRPCClient\\Method\\shh\\$key";
        return new $classname($this->url);
    }
}
