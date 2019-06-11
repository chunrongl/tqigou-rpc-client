<?php

namespace Chunrongl\TqigouRpcClient;

use Illuminate\Support\ServiceProvider;

class ClientProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/Config/tqigou-rpc-service.php';
        $publishPath = config_path('tqigou-rpc-service.php');
        $this->publishes([$configPath => $publishPath], 'config');
    }

    public function register()
    {
        $configPath = __DIR__ . 'Config/tqigou-rpc-service.php';
        $this->mergeConfigFrom($configPath, 'tqigou-rpc-service');
    }
}