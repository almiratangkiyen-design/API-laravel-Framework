<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponses
{
    /**
     * Shortcut for a 200 OK response.
     */
    protected function ok(
        string $message,
        mixed $data = null
    ): JsonResponse {
        return $this->success($message, $data, 200);
    }

    /**
     * Generic success response.
     */
    protected function success(
        string $message,
        mixed $data = null,
        int $statusCode = 200
    ): JsonResponse {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'status' => $statusCode,
        ], $statusCode);
    }

    /**
     * Error response.
     */
    protected function error(
        string $message,
        int $statusCode = 400
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'status' => $statusCode,
        ], $statusCode);
    }
}
