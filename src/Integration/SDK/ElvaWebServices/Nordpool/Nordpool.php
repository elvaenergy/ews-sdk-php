<?php

namespace Elva\Integration\SDK\ElvaWebServices\Nordpool;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class Nordpool
 * @package Elva\Integration\SDK\ElvaWebServices\Nordpool
 *
 * This class is responsible for handling all available related requests
 * from the Elva API
 */
class Nordpool extends ElvaWebService
{
    /**
     * List all nordpool regions
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listRegions(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/regions",
            queryParams: $queryParams,
        );
    }

    /**
     * List a region's spot prices
     * @param string $regionCode
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listRegionSpotPrices(string $regionCode,
                                         array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/regions/{$regionCode}/spot-prices",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a region's spot price
     * @param string $regionCode
     * @param array $spotPriceData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createRegionSpotPrice(string $regionCode,
                                          array  $spotPriceData,
                                          array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/regions/{$regionCode}/spot-prices",
            data: $spotPriceData,
            queryParams: $queryParams,
        );
    }

    /**
     * Delete a tip resource
     * @param string $spotPriceUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function deleteSpotPrice(string $spotPriceUuid,
                                    array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/spot-prices/{$spotPriceUuid}",
            queryParams: $queryParams,
        );
    }
}