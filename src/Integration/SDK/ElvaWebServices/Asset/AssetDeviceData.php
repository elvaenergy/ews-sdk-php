<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset;

use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class AssetDeviceData
 * @package Elva\Integration\SDK\ElvaWebServices\Asset
 */
class AssetDeviceData extends ElvaWebService
{
    /**
     * List of all asset device data
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/device-data",
            queryParams: $queryParams,
        );
    }


    /**
     * Create a new device data
     * @param array $deviceData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $deviceData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/device-data",
            data: $deviceData,
            queryParams: $queryParams,
        );
    }


    /**
     * Get a device data resource
     * @param string $deviceDataUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $deviceDataUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/device-data/{$deviceDataUuid}",
            queryParams: $queryParams,
        );
    }


    /**
     * Update a device data resource
     * @param string $deviceDataUuid
     * @param array $deviceData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $deviceDataUuid,
                           array  $deviceData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/assets/device-data/{$deviceDataUuid}",
            data: $deviceData,
            queryParams: $queryParams,
        );
    }


    /**
     * Delete a device data resource
     * @param string $deviceDataUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $deviceDataUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/assets/device-data/{$deviceDataUuid}",
            queryParams: $queryParams,
        );
    }
}