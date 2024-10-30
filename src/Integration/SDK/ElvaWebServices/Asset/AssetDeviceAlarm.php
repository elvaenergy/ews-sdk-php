<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset;

use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class AssetDeviceAlarm
 * @package Elva\Integration\SDK\ElvaWebServices\Asset
 */
class AssetDeviceAlarm extends ElvaWebService
{
    /**
     * List of all asset device alarms
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/device-alarms",
            queryParams: $queryParams,
        );
    }


    /**
     * Create a new device alarm
     * @param array $deviceAlarmData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $deviceAlarmData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/device-alarms",
            data: $deviceAlarmData,
            queryParams: $queryParams,
        );
    }


    /**
     * Get a device alarm resource
     * @param string $deviceAlarmUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $deviceAlarmUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/device-alarms/{$deviceAlarmUuid}",
            queryParams: $queryParams,
        );
    }


    /**
     * Update a device alarm resource
     * @param string $deviceAlarmUuid
     * @param array $deviceAlarmData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $deviceAlarmUuid,
                           array  $deviceAlarmData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/assets/device-alarms/{$deviceAlarmUuid}",
            data: $deviceAlarmData,
            queryParams: $queryParams,
        );
    }


    /**
     * Delete a device alarm resource
     * @param string $deviceAlarmUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $deviceAlarmUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/assets/device-alarms/{$deviceAlarmUuid}",
            queryParams: $queryParams,
        );
    }
}