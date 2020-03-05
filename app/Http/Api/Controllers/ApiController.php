<?php


namespace App\Http\API\Controllers;

use Illuminate\Support\Facades\Response;

class ApiController
{

    protected function ok($data = null) {
        return Response::json($this->makeResponse($data));
    }

    protected function error($message, $code = 0, $data = null) {
        $httpCode = 500;
        if($code > 400 && $code < 503) {
            $httpCode = $code;
        }
        return Response::json($this->makeError($message, $code, $data),$httpCode);
    }

    protected function makeResponse($data)
    {
        return [
            'status' => true,
            'result'    => $data,
        ];
    }

    protected function makeError($message, $code = 0, $data = null)
    {
        $res = [
            'status' => false,
            'code' => $code,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
