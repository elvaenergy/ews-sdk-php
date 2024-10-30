<?php

namespace Elva\Integration\SDK\ElvaWebServices\Address\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class AddressFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Address\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $addressData, array $queryParams = [])
 * @method static JsonResponse get(string $addressUuid, array $queryParams = [])
 * @method static JsonResponse update(string $addressUuid, array $addressData, array $queryParams = [])
 * @method static JsonResponse delete(string $addressUuid, array $queryParams = [])
 */
class AddressFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.addresses';
    }
}