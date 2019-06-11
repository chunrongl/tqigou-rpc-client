<?php

namespace Chunrongl\TqigouRpcClient\Facades;


use Illuminate\Support\Facades\Facade;

class RpcText extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tqigou.rpc.text';
    }
}