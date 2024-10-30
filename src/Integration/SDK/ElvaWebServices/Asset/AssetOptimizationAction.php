<?php

namespace Elva\Integration\SDK\ElvaWebServices\Asset;

use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class AssetOptimizationAction
 * @package Elva\Integration\SDK\ElvaWebServices\Asset
 */
class AssetOptimizationAction extends ElvaWebService
{
    /**
     * List of all asset optimization actions
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions",
            queryParams: $queryParams,
        );
    }


    /**
     * Create a new optimization action
     * @param array $optimizationActionData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $optimizationActionData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions",
            data: $optimizationActionData,
            queryParams: $queryParams,
        );
    }


    /**
     * Get an optimization action resource
     * @param string $optimizationActionUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $optimizationActionUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions/{$optimizationActionUuid}",
            queryParams: $queryParams,
        );
    }


    /**
     * Update an optimization action resource
     * @param string $optimizationActionUuid
     * @param array $optimizationActionData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $optimizationActionUuid,
                           array  $optimizationActionData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions/{$optimizationActionUuid}",
            data: $optimizationActionData,
            queryParams: $queryParams,
        );
    }


    /**
     * Delete an optimization action resource
     * @param string $optimizationActionUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $optimizationActionUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions/{$optimizationActionUuid}",
            queryParams: $queryParams,
        );
    }


    /**
     * Get all optimization action's device requests resource
     * @param string $optimizationActionUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listDeviceRequests(string $optimizationActionUuid,
                                       array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions/{$optimizationActionUuid}/device-requests",
            queryParams: $queryParams,
        );
    }


    /**
     * Store a device request on an optimization action resource
     * @param string $optimizationActionUuid
     * @param array $deviceRequestData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createDeviceRequest(string $optimizationActionUuid,
                                        array  $deviceRequestData,
                                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/assets/optimization-actions/{$optimizationActionUuid}/device-requests",
            data: $deviceRequestData,
            queryParams: $queryParams,
        );
    }
}