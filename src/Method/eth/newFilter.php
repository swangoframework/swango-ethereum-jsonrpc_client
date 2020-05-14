<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class newFilter extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    private $ob;
    public function __construct(string $url) {
        parent::__construct($url);
        $this->ob = new \stdClass();
        $this->params = [
            $this->ob
        ];
    }
    public function setFromBlock(string $block): self {
        $this->ob->fromBlock = $block;
        return $this;
    }
    public function setToBlock(string $block): self {
        $this->ob->toBlock = $block;
        return $this;
    }
    public function setAddress(string ...$address): self {
        if (! empty($address))
            $this->ob->address = count($address) === 1 ? current($address) : $address;
        return $this;
    }
    public function setTopics(array $topics): self {
        $this->ob->topics = $topics;
        return $this;
    }
}