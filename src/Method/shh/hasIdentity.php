<?php
namespace Swango\Ethereum\JsonRPCClient\Method\shh;
class hasIdentity extends \Swango\Ethereum\JsonRPCClient\Method\shh {
    public function setIdentityAddress(string $address): self {
        $this->params = [
            $address
        ];
        return $this;
    }
}