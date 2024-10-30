<?php

namespace Elva\Integration\SDK\ElvaWebServices\Tip;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class Tip
 * @package Elva\Integration\SDK\ElvaWebServices\Tip
 *
 * This class is responsible for handling all customer tips related requests
 * from the Elva API
 */
class Tip extends ElvaWebService
{
    /**
     * List all tips
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/tips",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a tip
     * @param array $tipData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $tipData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/tips",
            data: $tipData,
            queryParams: $queryParams,
        );
    }

    /**
     * Get a tip resource
     * @param string $tipUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $tipUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/tips/{$tipUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * Update a tip resource
     * @param string $tipUuid
     * @param array $tipData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $tipUuid,
                           array  $tipData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/tips/{$tipUuid}",
            data: $tipData,
            queryParams: $queryParams,
        );
    }

    /**
     * Delete a tip resource
     * @param string $tipUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $tipUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/tips/{$tipUuid}",
            queryParams: $queryParams,
        );
    }
}