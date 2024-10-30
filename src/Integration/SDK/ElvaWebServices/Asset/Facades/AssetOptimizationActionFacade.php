<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetOptimizationRequestFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Asset\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $optimizationActionData, array $queryParams = [])
 * @method static JsonResponse get(string $optimizationActionUuid, array $queryParams = [])
 * @method static JsonResponse update(string $optimizationActionUuid, array $optimizationActionData, array $queryParams = [])
 * @method static JsonResponse delete(string $optimizationActionUuid, array $queryParams = [])
 *
 * @method static JsonResponse listDeviceRequests(string $optimizationActionUuid, array $queryParams = [])
 * @method static JsonResponse createDeviceRequest(string $optimizationActionUuid, array $deviceRequestData, array $queryParams = [])
 */
class AssetOptimizationActionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.asset-optimization-actions';
    }
}