<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset;

use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class AssetDeviceRequest
 * @package Elva\Integration\SDK\ElvaWebServices\Asset
 */
class AssetDeviceRequest extends ElvaWebService
{
    /**
     * List of all asset device requests
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/device-requests",
            queryParams: $queryParams,
        );
    }


    /**
     * Create a new device request
     * @param array $deviceRequestData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $deviceRequestData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/device-requests",
            data: $deviceRequestData,
            queryParams: $queryParams,
        );
    }


    /**
     * Get a device request resource
     * @param string $deviceRequestUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $deviceRequestUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/device-requests/{$deviceRequestUuid}",
            queryParams: $queryParams,
        );
    }


    /**
     * Update a device request resource
     * @param string $deviceRequestUuid
     * @param array $deviceRequestData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $deviceRequestUuid,
                           array  $deviceRequestData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/assets/device-requests/{$deviceRequestUuid}",
            data: $deviceRequestData,
            queryParams: $queryParams,
        );
    }


    /**
     * Delete a device request resource
     * @param string $deviceRequestUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $deviceRequestUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/assets/device-requests/{$deviceRequestUuid}",
            queryParams: $queryParams,
        );
    }
}