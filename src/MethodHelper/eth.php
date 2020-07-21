<?php
namespace Swango\Ethereum\JsonRPCClient\MethodHelper;

/**
 *
 * @author fdrea
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\accounts $accounts
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\blockNumber $blockNumber
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\call $call
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\coinbase $coinbase
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\estimateGas $estimateGas
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\gasPrice $gasPrice
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getBalance $getBalance
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getBlockByHash $getBlockByHash
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getBlockByNumber $getBlockByNumber
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getBlockTransactionCountByHash $getBlockTransactionCountByHash
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getBlockTransactionCountByNumber $getBlockTransactionCountByNumber
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getCode $getCode
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getFilterChanges $getFilterChanges
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getFilterLogs $getFilterLogs
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getLogs $getLogs
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getProof $getProof
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getStorageAt $getStorageAt
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getTransactionByBlockHashAndIndex $getTransactionByBlockHashAndIndex
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getTransactionByBlockNumberAndIndex $getTransactionByBlockNumberAndIndex
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getTransactionByHash $getTransactionByHash
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getTransactionCount $getTransactionCount
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getTransactionReceipt $getTransactionReceipt
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getUncleByBlockHashAndIndex $getUncleByBlockHashAndIndex
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getUncleByBlockNumberAndIndex $getUncleByBlockNumberAndIndex
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getUncleCountByBlockNumber $getUncleCountByBlockNumber
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\getWork $getWork
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\hashrate $hashrate
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\mining $mining
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\newBlockFilter $newBlockFilter
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\newFilter $newFilter
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\newPendingTransactionFilter $newPendingTransactionFilter
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\pendingTransactions $pendingTransactions
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\protocolVersion $protocolVersion
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\sendRawTransaction $sendRawTransaction
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\sendTransaction $sendTransaction
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\sign $sign
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\submitHashrate $submitHashrate
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\submitWork $submitWork
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\syncing $syncing
 * @property \Swango\Ethereum\JsonRPCClient\Method\eth\uninstallFilter $uninstallFilter
 *
 */
class eth {
    private $url;
    public function __construct(string $url) {
        $this->url = $url;
    }
    public function __get(string $key) {
        $classname = "Swango\\Ethereum\\JsonRPCClient\\Method\\eth\\$key";
        return new $classname($this->url);
    }
}
