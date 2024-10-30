<?php

namespace Elva\Integration\SDK;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class ElvaWebService
{
    public function __construct(protected string $accessToken,
                                protected string $apiBaseUrl)
    {}

    public function apiCall(string $method,
                            string $apiUrl,
                            array  $data = [],
                            array  $queryParams = [],
                            array  $headers = []): JsonResponse
    {
        $httpRequestHeader = array_merge($headers, [
            'Authorization' => "Bearer {$this->accessToken}",
            'Accept'        => 'application/json'
        ]);

        if (in_array($method, ['POST', 'PUT', 'PATCH'])) {
            if (!isset($httpRequestHeader['Content-Type'])) {
                $httpRequestHeader['Content-Type'] = "application/json";
            }
        }

        $client = new Client([
            'headers' => $httpRequestHeader
        ]);

        $options = [];

        if (!empty($data)) {
            match ($httpRequestHeader['Content-Type']) {
                'application/json' => $options['json'] = $data,
                'application/x-www-form-urlencoded' => $options['form_params'] = $data,
                'multipart/form-data' => $options['multipart'] = $data,
            };
        }

        if (!empty($queryParams)) $options['query'] = $queryParams;

        $response = null;

        try {
            $response = $client->request($method, $apiUrl, $options);
        } catch (GuzzleException $e) {
            Log::error("Error in ElvaWebService API call: {$e->getMessage()}");
        }

        if ($response) {
            return new JsonResponse(
                json_decode($response->getBody()->getContents(), true),
                $response->getStatusCode()
            );
        }

        return new JsonResponse([
            'status' => 'ERROR',
            'message' => 'Error in ElvaWebService API call'
        ], 500);

    }
}