<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Nordpool\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Nordpool\Nordpool;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class NordpoolServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Nordpool\ServiceProviders
 */
class NordpoolServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.nordpool', function () {
            return new Nordpool(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}