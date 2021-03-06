<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getTransactionCount extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setAddressAndBlockNumber(string $address,
        string $block = \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST): self {
        $this->params = [
            $address,
            $block
        ];
        return $this;
    }
}