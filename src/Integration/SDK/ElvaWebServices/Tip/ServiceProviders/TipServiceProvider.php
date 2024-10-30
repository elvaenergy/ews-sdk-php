<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Tip\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Tip\Tip;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class TipServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Tip\ServiceProviders
 */
class TipServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.tips', function () {
            return new Tip(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}