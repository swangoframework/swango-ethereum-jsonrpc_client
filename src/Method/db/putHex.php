<?php
namespace Swango\Ethereum\JsonRPCClient\Method\db;
class putHex extends \Swango\Ethereum\JsonRPCClient\Method\db {
    public function setDbKeyAndValue(string $db, string $key, string $value): self {
        $this->params = [
            $db,
            $key,
            $value
        ];
        return $this;
    }
}