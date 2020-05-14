<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getBlockByNumber extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setNumberAndFlag(string $block, bool $return_full_obj): self {
        $this->params = [
            $block,
            $return_full_obj
        ];
        return $this;
    }
}