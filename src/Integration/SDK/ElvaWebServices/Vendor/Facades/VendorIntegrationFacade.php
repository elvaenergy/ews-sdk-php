<?php

namespace Elva\Integration\SDK\ElvaWebServices\Vendor\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class VendorIntegrationFacade
 * @package Elva\Integration\SDK\ElvaWebServices\VendorIntegration\Facades
 *
 * @method static JsonResponse update(string $vendorIntegrationUuid, array $vendorIntegrationData, array $queryParams = [])

 * @method static JsonResponse createEvent(string $vendorIntegrationUuid, array $eventData, array $queryParams = [])
 */
class VendorIntegrationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.vendor-integrations';
    }
}