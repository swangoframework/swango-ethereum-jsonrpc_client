<?php
namespace Swango\Ethereum\JsonRPCClient\Method\web3;
class sha3 extends \Swango\Ethereum\JsonRPCClient\Method\web3 {
    public function setDataToConvert(string $data_to_convert): self {
        $this->params = [
            $data_to_convert
        ];
        return $this;
    }
}