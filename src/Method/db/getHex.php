<?php
namespace Swango\Ethereum\JsonRPCClient\Method\db;
class getHex extends \Swango\Ethereum\JsonRPCClient\Method\db {
    public function setDbAndKey(string $db, string $key): self {
        $this->params = [
            $db,
            $key
        ];
        return $this;
    }
}