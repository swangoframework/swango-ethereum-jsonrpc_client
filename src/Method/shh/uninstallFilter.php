<?php
namespace Swango\Ethereum\JsonRPCClient\Method\shh;
class uninstallFilter extends \Swango\Ethereum\JsonRPCClient\Method\shh {
    public function setFilterId(string $filter_id): self {
        $this->params = [
            $filter_id
        ];
        return $this;
    }
}