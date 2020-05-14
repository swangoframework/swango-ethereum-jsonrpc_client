<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class call extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    private $ob;
    public function __construct(string $url) {
        parent::__construct($url);
        $this->ob = new \stdClass();
        $this->params = [
            $this->ob,
            \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST
        ];
    }
    public function setFrom(string $address): self {
        $this->ob->from = $address;
        return $this;
    }
    public function setTo(string $address): self {
        $this->ob->to = $address;
        return $this;
    }
    public function setGas(string $gas): self {
        $this->ob->gas = $gas;
        return $this;
    }
    public function setGasPrice(string $gas_price): self {
        $this->ob->gasPrice = $gas_price;
        return $this;
    }
    public function setValue(string $value): self {
        $this->ob->value = $value;
        return $this;
    }
    public function setData(string $data): self {
        $this->ob->data = $data;
        return $this;
    }
    public function setBlockNumber(string $block = \Swango\Ethereum\JsonRPCClient\Consts::BLOCK_LATEST): self {
        $this->params[1] = $block;
        return $this;
    }
}