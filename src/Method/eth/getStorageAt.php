<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getStorageAt extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setAddressPositionAndBlockNumber(string $address, string $position,
        string $block = \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST): self {
        $this->params = [
            $address,
            $position,
            $block
        ];
        return $this;
    }
}