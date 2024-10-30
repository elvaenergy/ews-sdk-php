<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Customer\ServiceProviders;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Elva\Integration\SDK\ElvaWebServices\Customer\Customer;


/**
 * Class CustomerServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Customer\ServiceProviders
 *
 */
class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.customers', function () {
            return new Customer(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}