<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getBlockTransactionCountByHash extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setAddress(string $address): self {
        $this->params = [
            $address
        ];
        return $this;
    }
}