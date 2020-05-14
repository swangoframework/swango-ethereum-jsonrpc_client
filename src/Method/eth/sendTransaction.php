<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class sendTransaction extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    private $ob;
    public function __construct(string $url) {
        parent::__construct($url);
        $this->ob = new \stdClass();
        $this->params = [
            $this->ob
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
    public function setNonce(string $nonce): self {
        $this->ob->nonce = $nonce;
        return $this;
    }
}