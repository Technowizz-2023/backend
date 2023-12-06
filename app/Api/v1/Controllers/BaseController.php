<?php

namespace App\Api\v1\Controllers;

use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use Apitte\Core\Schema\Builder\Controller\Controller;
use Apitte\Core\UI\Controller\IController;
use Apitte\Negotiation\Http\ArrayEntity;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

/**
 * @Apitte\Path("/api")
 * @Apitte\Id("api")
 */
class BaseController extends Controller
{
    /**
     * @Apitte\Path("/api")
     * @Apitte\Id("api")
     */
    public function detail(ApiRequest $apiRequest, ApiResponse $apiResponse): ApiResponse
    {
        $entity = ArrayEntity::from([
            "status" => "ok",
            "test" => "ok"
        ]);
        return $apiResponse->withStatus(ApiResponse::S200_OK)->withEntity($entity);
    }
}