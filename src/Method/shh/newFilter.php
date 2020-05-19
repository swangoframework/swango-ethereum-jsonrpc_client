<?php
namespace Swango\Ethereum\JsonRPCClient\Method\shh;
class newFilter extends \Swango\Ethereum\JsonRPCClient\Method\shh {
    private $ob;
    public function __construct(string $url) {
        parent::__construct($url);
        $this->ob = new \stdClass();
        $this->params = [
            $this->ob
        ];
    }
    public function setTo(string $address): self {
        $this->ob->to = $address;
        return $this;
    }
    public function setTopics(array $topics): self {
        $this->ob->topics = $topics;
        return $this;
    }
}