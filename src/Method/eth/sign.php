<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class sign extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setAddressAndMessage(string $address, string $message): self {
        $this->params = [
            $address,
            $message
        ];
        return $this;
    }
}