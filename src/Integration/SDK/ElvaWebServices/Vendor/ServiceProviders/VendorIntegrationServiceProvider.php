<?php /** @noinspection PhpUndefinedFunctionInspection */

namespace Elva\Integration\SDK\ElvaWebServices\Vendor\ServiceProviders;


use Elva\Integration\SDK\ElvaWebServices\Vendor\VendorIntegration;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class VendorIntegrationServiceProvider
 * @package Elva\Integration\SDK\ElvaWebServices\Tip\ServiceProviders
 */
class VendorIntegrationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('elva-web-services.vendor-integrations', function () {
            return new VendorIntegration(
                Config::get('elva.personal_access_token'),
                Config::get('elva.api_endpoint'),
            );
        });
    }
}