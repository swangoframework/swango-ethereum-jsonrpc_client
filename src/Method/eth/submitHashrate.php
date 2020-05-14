<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class submitHashrate extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setHashrateAndId(string $hashrate, string $id): self {
        $this->params = [
            $hashrate,
            $id
        ];
        return $this;
    }
}