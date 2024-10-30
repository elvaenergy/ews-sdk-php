<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Facility\ServiceProviders;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Elva\Integration\SDK\ElvaWebServices\Facility\Facility;


/**
 * Class FacilityServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Facility\ServiceProviders
 *
 */
class FacilityServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.facilities', function () {
            return new Facility(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}