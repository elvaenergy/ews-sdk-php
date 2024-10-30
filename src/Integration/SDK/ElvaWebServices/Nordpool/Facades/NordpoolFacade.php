<?php

namespace Elva\Integration\SDK\ElvaWebServices\Nordpool\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class TipFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Tip\Facades
 *
 * @method static JsonResponse listRegions(array $queryParams = [])
 * @method static JsonResponse listRegionSpotPrices(string $regionCode, array $queryParams = [])
 * @method static JsonResponse createRegionSpotPrice(string $regionCode, array $spotPriceData, array $queryParams = [])
 * @method static JsonResponse deleteSpotPrice(string $regionUuid, array $queryParams = [])
 */
class NordpoolFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.nordpool';
    }
}