<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Asset\AssetDeviceRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class AssetDeviceRequestServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders
 */
class AssetDeviceRequestServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.asset-device-requests', function () {
            return new AssetDeviceRequest(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}