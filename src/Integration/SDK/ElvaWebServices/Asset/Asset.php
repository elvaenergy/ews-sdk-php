<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class Asset
 * @package Elva\Integration\SDK\ElvaWebServices\Asset
 */
class Asset extends ElvaWebService
{
    /**
     * List all assets
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new asset
     * @param array $assetData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $assetData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets",
            data: $assetData,
            queryParams: $queryParams,
        );
    }

    /**
     * Get a asset resource
     * @param string $assetUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $assetUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * Update a asset resource
     * @param string $assetUuid
     * @param array $assetData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $assetUuid,
                           array  $assetData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}",
            data: $assetData,
            queryParams: $queryParams,
        );
    }

    /**
     * Delete a asset resource
     * @param string $assetUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $assetUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * List an asset resource's device alarms
     */
    public function listDeviceAlarms(string $assetUuid,
                                     array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/device-alarms",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new device alarm
     * @param string $assetUuid
     * @param array $deviceAlarmData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createDeviceAlarm(string $assetUuid,
                                      array  $deviceAlarmData,
                                      array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/device-alarms",
            data: $deviceAlarmData,
            queryParams: $queryParams,
        );
    }

    /**
     * List an asset resource's device data
     */
    public function listDeviceData(string $assetUuid,
                                   array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/device-data",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new device data
     * @param string $assetUuid
     * @param array $deviceData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createDeviceData(string $assetUuid,
                                     array  $deviceData,
                                     array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/device-data",
            data: $deviceData,
            queryParams: $queryParams,
        );
    }

    /**
     * List an asset resource's device requests
     */
    public function listDeviceRequests(string $assetUuid,
                                       array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/device-requests",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new device request
     * @param string $assetUuid
     * @param array $deviceRequestData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createDeviceRequest(string $assetUuid,
                                        array  $deviceRequestData,
                                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/device-requests",
            data: $deviceRequestData,
            queryParams: $queryParams,
        );
    }

    /**
     * List an asset resource's optimization actions
     */
    public function listOptimizationActions(string $assetUuid,
                                            array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/optimization-actions",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new optimization action
     * @param string $assetUuid
     * @param array $optimizationActionData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createOptimizationAction(string $assetUuid,
                                             array  $optimizationActionData,
                                             array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/optimization-actions",
            data: $optimizationActionData,
            queryParams: $queryParams,
        );
    }

    /**
     * List an asset resource's normalized device data
     */
    public function listNormalizedDeviceData(string $assetUuid,
                                             array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/normalized-device-data",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new normalized device data
     * @param string $assetUuid
     * @param array $normalizedDeviceData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createNormalizedDeviceData(string $assetUuid,
                                               array  $normalizedDeviceData,
                                               array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/{$assetUuid}/normalized-device-data",
            data: $normalizedDeviceData,
            queryParams: $queryParams,
        );
    }
}