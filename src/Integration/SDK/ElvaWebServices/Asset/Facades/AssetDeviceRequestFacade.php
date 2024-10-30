<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetDeviceRequestFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $deviceRequestData, array $queryParams = [])
 * @method static JsonResponse get(string $deviceRequestUuid, array $queryParams = [])
 * @method static JsonResponse update(string $deviceRequestUuid, array $deviceRequestData, array $queryParams = [])
 * @method static JsonResponse delete(string $deviceRequestUuid, array $queryParams = [])
 */
class AssetDeviceRequestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.asset-device-requests';
    }
}