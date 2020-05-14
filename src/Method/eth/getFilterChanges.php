<?php
namespace Swango\Ethereum\JsonRPCClient\Method\eth;
class getFilterChanges extends \Swango\Ethereum\JsonRPCClient\Method\eth {
    public function setFilterId(string $filter_id): self {
        $this->params = [
            $filter_id
        ];
        return $this;
    }
}