<?php

namespace Elva\Integration\SDK\ElvaWebServices\Facility\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class FacilityFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Facility\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $facilityData, array $queryParams = [])
 * @method static JsonResponse get(string $facilityUuid, array $queryParams = [])
 * @method static JsonResponse update(string $facilityUuid, array $facilityData, array $queryParams = [])
 * @method static JsonResponse delete(string $facilityUuid)
 *
 * @method static JsonResponse listAssets(string $facilityUuid, array $queryParams = [])
 * @method static JsonResponse createAsset(string $facilityUuid, array $assetData, array $queryParams = [])
 *
 * @method static JsonResponse listCustomers(string $facilityUuid, array $queryParams = [])

 * @method static JsonResponse listTips(string $facilityUuid, array $queryParams = [])

 * @method static JsonResponse listWeatherData(string $facilityUuid, array $queryParams = [])

 * @method static JsonResponse listNordpoolSpotPrices(string $facilityUuid, array $queryParams = [])
 */
class FacilityFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.facilities';
    }
}