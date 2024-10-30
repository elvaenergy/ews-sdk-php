<?php

namespace Elva\Integration\SDK\ElvaWebServices\Customer;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class Customer
 * @package Elva\Integration\SDK\ElvaWebServices\Customer
 */
class Customer extends ElvaWebService
{
    /**
     * List all customers
     * @param array $queryParams
     * @return JsonResponse
     */
    public function list(array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/customers",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a new customer
     * @param array $customerData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function create(array $customerData,
                           array $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/customers",
            data: $customerData,
            queryParams: $queryParams,
        );
    }

    /**
     * Get a customer resource
     * @param string $customerUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function get(string $customerUuid,
                        array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * Update a customer resource
     * @param string $customerUuid
     * @param array $customerData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $customerUuid,
                           array  $customerData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}",
            data: $customerData,
            queryParams: $queryParams,
        );
    }

    /**
     * Delete a customer resource
     * @param string $customerUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function delete(string $customerUuid,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'DELETE',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}",
            queryParams: $queryParams,
        );
    }

    /**
     * List a customer resource's facilities
     * @param string $customerUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listFacilities(string $customerUuid,
                                   array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}/facilities",
            queryParams: $queryParams,
        );
    }

    /**
     * Create a facility resource to customer resources
     * @param string $customerUuid
     * @param array $facilityData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createFacility(string $customerUuid,
                                   array  $facilityData,
                                   array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}/facilities",
            data: $facilityData,
            queryParams: $queryParams,
        );
    }

    /**
     * List a customer resource's addresses
     * @param string $customerUuid
     * @param array $queryParams
     * @return JsonResponse
     */
    public function listAddresses(string $customerUuid,
                                  array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'GET',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}/addresses",
            queryParams: $queryParams,
        );
    }

    /**
     * Create an address resource to customer resources
     * @param string $customerUuid
     * @param array $addressData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createAddress(string $customerUuid,
                                  array  $addressData,
                                  array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/customers/{$customerUuid}/addresses",
            data: $addressData,
            queryParams: $queryParams,
        );
    }
}