<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Asset\AssetOptimizationAction;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class AssetOptimizationActionServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\ServiceProviders
 */
class AssetOptimizationActionServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.asset-optimization-actions', function () {
            return new AssetOptimizationAction(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}