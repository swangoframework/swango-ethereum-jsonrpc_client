<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getProof extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setAddressPositionAndBlockNumber(string $address, array $storage_keys,
        string $block = \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST): self {
        $this->params = [
            $address,
            $storage_keys,
            $block
        ];
        return $this;
    }
}