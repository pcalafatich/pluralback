<?php

namespace App\Traits;

trait HttpResponses {

    protected function success($data, string $message = null, int $code = 200)
    {
        return response()->json([
            'status' => 'La Solicitud fue exitosa.',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, string $message = null, int $code)
    {
        return response()->json([
            'status' => 'Ha ocurrido un error...',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
