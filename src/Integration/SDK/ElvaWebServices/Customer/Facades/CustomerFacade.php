<?php

namespace Elva\Integration\SDK\ElvaWebServices\Customer\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class CustomerFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Customer\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $customerData, array $queryParams = [])
 * @method static JsonResponse get(string $customerUuid, array $queryParams = [])
 * @method static JsonResponse update(string $customerUuid, array $customerData, array $queryParams = [])
 * @method static JsonResponse delete(string $customerUuid)
 *
 * @method static JsonResponse listFacilities(string $customerUuid, array $queryParams = [])
 * @method static JsonResponse createFacility(string $customerUuid, array $facilityData, array $queryParams = [])
 *
 * @method static JsonResponse listAddresses(string $customerUuid, array $queryParams = [])
 * @method static JsonResponse createAddress(string $customerUuid, array $addressData, array $queryParams = [])
 */
class CustomerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.customers';
    }
}