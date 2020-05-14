<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getTransactionByBlockNumberAndIndex extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setBlockNumberAndIndex(string $block, string $index): self {
        $this->params = [
            $block,
            $index
        ];
        return $this;
    }
}