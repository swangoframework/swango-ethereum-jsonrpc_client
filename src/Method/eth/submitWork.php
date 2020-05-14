<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class submitWork extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setNoncePowHashAndDigest(string $nonce, string $pow_hash, string $digest): self {
        $this->params = [
            $nonce,
            $pow_hash,
            $digest
        ];
        return $this;
    }
}