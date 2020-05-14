<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getUncleCountByBlockNumber extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setBlockNumber(string $block = \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST): self {
        $this->params = [
            $block
        ];
        return $this;
    }
}