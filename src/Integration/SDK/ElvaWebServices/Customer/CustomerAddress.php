<?php

namespace Elva\Integration\SDK\ElvaWebServices\Customer;

use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class CustomerAddress
 * @package Elva\Integration\SDK\ElvaWebServices\Customer
 */
class CustomerAddress extends ElvaWebService
{
    /**
     * List of all customer addresses
     * @param array $queryParams
     * @return JsonResponse
     */
    public function all(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/customers/addresses",
            queryParams: $queryParams,
        );
    }


    /**
     * Create a new customer address
     * @param array $customerAddressData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $customerAddressData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/customers/addresses",
            data: $customerAddressData,
            queryParams: $queryParams,
        );
    }


    /**
     * Get a customer address resource
     * @param string $customerAddressUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $customerAddressUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/customers/addresses/{$customerAddressUuid}",
            queryParams: $queryParams,
        );
    }


    /**
     * Update a customer address resource
     * @param string $customerAddressUuid
     * @param array $customerAddressData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $customerAddressUuid,
                           array  $customerAddressData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/customers/addresses/{$customerAddressUuid}",
            data: $customerAddressData,
            queryParams: $queryParams,
        );
    }


    /**
     * Delete a customer address resource
     * @param string $customerAddressUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $customerAddressUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/customers/addresses/{$customerAddressUuid}",
            queryParams: $queryParams,
        );
    }
}