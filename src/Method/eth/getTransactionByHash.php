<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getTransactionByHash extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setHash(string $transaction_hash): self {
        $this->params = [
            $transaction_hash
        ];
        return $this;
    }
}