<?php

namespace Elva\Integration\SDK\ElvaWebServices\Tip\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Class TipFacade
 * @package Elva\Integration\SDK\ElvaWebServices\Tip\Facades
 *
 * @method static JsonResponse list(array $queryParams = [])
 * @method static JsonResponse create(array $tipData, array $queryParams = [])
 * @method static JsonResponse get(string $tipUuid, array $queryParams = [])
 * @method static JsonResponse update(string $tipUuid, array $tipData, array $queryParams = [])
 * @method static JsonResponse delete(string $tipUuid, array $queryParams = [])
 */
class TipFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'elva-web-services.tips';
    }
}