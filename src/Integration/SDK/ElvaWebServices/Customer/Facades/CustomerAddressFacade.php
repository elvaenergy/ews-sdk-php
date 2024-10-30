<?php

namespace Elva\Integration\SDK\ElvaWebServices\Customer\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class CustomerAddressFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Customer\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $customerAddressData, array $queryParams = [])
 * @method static JsonResponse get(string $customerAddressUuid, array $queryParams = [])
 * @method static JsonResponse update(string $customerAddressUuid, array $customerAddressData, array $queryParams = [])
 * @method static JsonResponse delete(string $customerAddressUuid)
 */
class CustomerAddressFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.customer-addresses';
    }
}