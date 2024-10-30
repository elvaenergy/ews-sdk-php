<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Address\ServiceProviders;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Elva\Integration\SDK\ElvaWebServices\Address\Address;

/**
 * Class AddressServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Address\ServiceProviders
 *
 */
class AddressServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.addresses', function () {
            return new Address(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}