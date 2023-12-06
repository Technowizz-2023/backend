<?php

namespace App\Api\v1\Controllers;

use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use App\Api\v1\BaseController;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

/**
 * @Path("/data")
 */
class TestController extends BaseController
{
    /**
     * @throws JsonException
     */
    public function detail(ApiRequest $apiRequest, ApiResponse $apiResponse) {
        $response = $apiResponse->writeBody(Json::encode([
            "status" => "ok",
            "test" => "ok"
        ]));
    }
}