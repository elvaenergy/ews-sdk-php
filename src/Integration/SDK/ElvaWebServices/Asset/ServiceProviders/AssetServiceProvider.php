<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Asset\Asset;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class AssetServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders
 */
class AssetServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.assets', function () {
            return new Asset(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}