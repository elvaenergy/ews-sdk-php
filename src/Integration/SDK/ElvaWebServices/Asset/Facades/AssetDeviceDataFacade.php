<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetDeviceDataFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $deviceData, array $queryParams = [])
 * @method static JsonResponse get(string $deviceDataUuid, array $queryParams = [])
 * @method static JsonResponse update(string $deviceDataUuid, array $deviceData, array $queryParams = [])
 * @method static JsonResponse delete(string $deviceDataUuid, array $queryParams = [])
 */
class AssetDeviceDataFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.asset-device-data';
    }
}