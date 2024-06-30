<?php
namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    /**
     * Generate a successful API response.
     *
     * @param mixed $data
     * @param int $statusCode
     * @param string $message
     * @return JsonResponse
     */
    public static function success($data, int $statusCode = 200, string $message = 'OK'): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
        ], $statusCode);
    }

    /**
     * Generate an error API response.
     *
     * @param string $message
     * @param int $statusCode
     * @param array $errors
     * @return JsonResponse
     */
    public static function error(string $message, int $statusCode = 400, array $errors = []): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
        ], $statusCode);
    }
}