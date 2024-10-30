<?php

namespace Elva\Integration\SDK\ElvaWebServices\Facility;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class Facility
 * @package Elva\Integration\SDK\ElvaWebServices\Facility
 */
class Facility extends ElvaWebService
{
    /**
     * List all facilities
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new facility
     * @param array $facilityData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $facilityData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/facilities",
            data: $facilityData,
            queryParams: $queryParams,
        );
    }

    /**
     * Get a facility resource
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $facilityUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * Update a facility resource
     * @param string $facilityUuid
     * @param array $facilityData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $facilityUuid,
                           array  $facilityData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}",
            data: $facilityData,
            queryParams: $queryParams,
        );
    }

    /**
     * Delete a facility resource
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $facilityUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * List a facility resource's assets
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listAssets(string $facilityUuid,
                               array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}/assets",
            queryParams: $queryParams,
        );
    }

    /**
     * Create new facility resource's asset
     * @param string $facilityUuid
     * @param array $assetData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createAsset(string $facilityUuid,
                                array  $assetData,
                                array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}/assets",
            data: $assetData,
            queryParams: $queryParams,
        );
    }

    /**
     * List a facility resource's customers
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listCustomers(string $facilityUuid,
                                  array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}/customers",
            queryParams: $queryParams,
        );
    }

    /**
     * List a facility resource's tips
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listTips(string $facilityUuid,
                             array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}/tips",
            queryParams: $queryParams,
        );
    }

    /**
     * List a facility resource's tips
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listWeatherData(string $facilityUuid,
                                    array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}/weather-data",
            queryParams: $queryParams,
        );
    }

    /**
     * List a facility resource's tips
     * @param string $facilityUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listNordpoolSpotPrices(string $facilityUuid,
                                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/facilities/{$facilityUuid}/nordpool/spot-prices",
            queryParams: $queryParams,
        );
    }
}