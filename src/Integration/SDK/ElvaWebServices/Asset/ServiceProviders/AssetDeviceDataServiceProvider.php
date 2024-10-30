<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Asset\AssetDeviceData;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class AssetDeviceDataServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders
 */
class AssetDeviceDataServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.asset-device-data', function () {
            return new AssetDeviceData(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}