<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetDeviceAlarmFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $deviceAlarmData, array $queryParams = [])
 * @method static JsonResponse get(string $deviceAlarmUuid, array $queryParams = [])
 * @method static JsonResponse update(string $deviceAlarmUuid, array $deviceAlarmData, array $queryParams = [])
 * @method static JsonResponse delete(string $deviceAlarmUuid, array $queryParams = [])
 */
class AssetDeviceAlarmFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.asset-device-alarms';
    }
}