<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $assetData, array $queryParams = [])
 * @method static JsonResponse get(string $assetUuid, array $queryParams = [])
 * @method static JsonResponse update(string $assetUuid, array $assetData, array $queryParams = [])
 * @method static JsonResponse delete(string $assetUuid)
 *
 * @method static JsonResponse listDeviceAlarms(string $assetUuid, array $queryParams = [])
 * @method static JsonResponse createDeviceAlarm(string $assetUuid, array $deviceAlarmData, array $queryParams = [])
 *
 * @method static JsonResponse listDeviceData(string $assetUuid, array $queryParams = [])
 * @method static JsonResponse createDeviceData(string $assetUuid, array $deviceData, array $queryParams = [])
 *
 * @method static JsonResponse listDeviceRequests(string $assetUuid, array $queryParams = [])
 * @method static JsonResponse createDeviceRequest(string $assetUuid, array $deviceRequestData, array $queryParams = [])
 *
 * @method static JsonResponse listOptimizationActions(string $assetUuid, array $queryParams = [])
 * @method static JsonResponse createOptimizationAction(string $assetUuid, array $optimizationActionData, array $queryParams = [])
 *
 * @method static JsonResponse listNormalizedDeviceData(string $assetUuid, array $queryParams = [])
 * @method static JsonResponse createNormalizedDeviceData(string $assetUuid, array $deviceData, array $queryParams = [])
 *
 */
class AssetFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.assets';
    }
}