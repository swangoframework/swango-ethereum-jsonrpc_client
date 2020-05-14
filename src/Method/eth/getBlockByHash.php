<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getBlockByHash extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setHashAndFlag(string $block_hash, bool $return_full_obj): self {
        $this->params = [
            $block_hash,
            $return_full_obj
        ];
        return $this;
    }
}