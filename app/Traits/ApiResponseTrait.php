<?php

namespace App\Traits;

trait ApiResponseTrait
{
    function apiResponse($data, $status, $msg)
    {
        $responseBody = [
            'data' => $data,
            'status' => $status,
            'message' => $msg
        ];
        return $responseBody;
    }
}
