<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getUncleByBlockNumberAndIndex extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setBlockNumberAndIndex(string $block, string $index): self {
        $this->params = [
            $block_hash,
            $index
        ];
        return $this;
    }
}