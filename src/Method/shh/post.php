<?php
namespace Swango\Ethereum\JsonRPCClient\Method\shh;
class post extends \Swango\Ethereum\JsonRPCClient\Method\shh {
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
    public function setTopics(string ...$topic): self {
        $this->ob->topics = $topic;
        return $this;
    }
    public function setPayload(string $payload): self {
        $this->ob->payload = $payload;
        return $this;
    }
    public function setPriority(string $priority): self {
        $this->ob->priority = $priority;
        return $this;
    }
    public function setTTL(string $ttl): self {
        $this->ob->ttl = $ttl;
        return $this;
    }
}