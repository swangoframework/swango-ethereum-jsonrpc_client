<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class sendRawTransaction extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setData(string $data): self {
        $this->params = [
            $data
        ];
        return $this;
    }
}