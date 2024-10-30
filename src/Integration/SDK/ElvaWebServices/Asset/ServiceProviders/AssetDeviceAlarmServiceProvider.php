<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Asset\AssetDeviceAlarm;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class AssetDeviceAlarmServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders
 */
class AssetDeviceAlarmServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.asset-device-alarms', function () {
            return new AssetDeviceAlarm(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}