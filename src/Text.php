<?php

namespace Chunrongl\TqigouRpcClient;


use Chunrongl\TqigouRpcClient\Exceptions\InvalidConfigException;
use Hprose\Client as HpClient;

class Text
{
    protected static $instances = array();

    public function inst($configName, $isAsync = false)
    {

        $config = config('tqigou-rpc-service.' . $configName, null);
        if (!$config) {
            throw new InvalidConfigException('配置无效');
        }

        if (!isset($config['uri']) || empty($config['uri'])) {
            throw new InvalidConfigException('配置非法');
        }

        $uris = $config['uri'];

        foreach ($uris as $k => $uri){
            $uris[$k]='tcp://'.ltrim($uri,'tcp://');
        }

        $server = HpClient::create($uris, $isAsync);

        return $server;
    }
}