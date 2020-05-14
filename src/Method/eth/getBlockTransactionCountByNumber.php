<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getBlockTransactionCountByNumber extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setBlockNumber(string $block = \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST): self {
        $this->params = [
            $block
        ];
        return $this;
    }
}