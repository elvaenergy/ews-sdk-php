<?php

namespace Elva\Integration\SDK\ElvaWebServices\Address;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class Address
 * @package Elva\Integration\SDK\ElvaWebServices\Address
 *
 * This class is responsible for handling all address related requests
 * from the Elva API
 */
class Address extends ElvaWebService
{
    /**
     * List all addresses
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/addresses",
            queryParams: $queryParams,
        );
    }

    /**
     * Create an address
     * @param array $addressData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $addressData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/addresses",
            data: $addressData,
            queryParams: $queryParams,
        );
    }

    /**
     * Get an address resource
     * @param string $addressUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $addressUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/addresses/{$addressUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * Update an address resource
     * @param string $addressUuid
     * @param array $addressData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $addressUuid,
                           array  $addressData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/addresses/{$addressUuid}",
            data: $addressData,
            queryParams: $queryParams,
        );
    }

    /**
     * Delete an address resource
     * @param string $addressUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $addressUuid,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/addresses/{$addressUuid}",
            queryParams: $queryParams,
        );
    }
}