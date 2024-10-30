<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Customer\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Customer\CustomerAddress;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;


/**
 * Class CustomerAddressServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Customer\ServiceProviders
 *
 */
class CustomerAddressServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.customer-addresses', function () {
            return new CustomerAddress(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}