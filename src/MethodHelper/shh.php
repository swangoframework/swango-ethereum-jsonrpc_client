<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;
class shh {
    private static $instance;
    private $map = [];
    public static function getInstance(): self {
        if (self::$instance === null)
            self::$instance = new self();
        return self::$instance;
    }
    public function __get(string $key) {
        if (array_key_exists($key, $this->map))
            return $this->map[$key];
        return null;
    }
    private function __construct() {
        $this->map = [];
    }
}
