<?php

namespace Elva\Integration\SDK\ElvaWebServices\Vendor;


use Illuminate\Http\JsonResponse;
use Elva\Integration\SDK\ElvaWebService;

/**
 * Class VendorIntegration
 * @package Elva\Integration\SDK\ElvaWebServices\VendorIntegration
 *
 * This class is responsible for handling vendor integrations related requests
 * from the Elva API
 */
class VendorIntegration extends ElvaWebService
{

    /**
     * Update a vendor integration resource
     * @param string $vendorIntegrationUuid
     * @param array $vendorIntegrationData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function update(string $vendorIntegrationUuid,
                           array  $vendorIntegrationData,
                           array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'PUT',
            apiUrl: "{$this->apiBaseUrl}/vendors/integrations/{$vendorIntegrationUuid}",
            data: $vendorIntegrationData,
            queryParams: $queryParams,
        );
    }

    /**
     * Update a tip resource
     * @param string $vendorIntegrationUuid
     * @param array $eventData
     * @param array $queryParams
     * @return JsonResponse
     */
    public function createEvent(string $vendorIntegrationUuid,
                                array  $eventData,
                                array  $queryParams = []): JsonResponse
    {
        return $this->apiCall(
            method: 'POST',
            apiUrl: "{$this->apiBaseUrl}/vendors/integrations/{$vendorIntegrationUuid}/events",
            data: $eventData,
            queryParams: $queryParams,
        );
    }
}