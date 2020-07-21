<?php
namespace Swango\Ethereum;
class JsonRPCClient {
    public static function api(string $url): JsonRPCClient\MethodHelper\MethodHelper {
        return new JsonRPCClient\MethodHelper\MethodHelper($url);
    }
}