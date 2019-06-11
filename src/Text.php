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

        $uri = $config['uri'];

        $server = HpClient::create($uri, $isAsync);

        return $server;
    }
}