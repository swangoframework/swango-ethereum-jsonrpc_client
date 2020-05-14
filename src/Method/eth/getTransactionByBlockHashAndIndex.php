<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getTransactionByBlockHashAndIndex extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setBlockHashAndIndex(string $block_hash, string $index): self {
        $this->params = [
            $block_hash,
            $index
        ];
        return $this;
    }
}