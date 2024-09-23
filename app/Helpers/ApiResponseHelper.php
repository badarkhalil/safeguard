<?php

namespace App\Helpers;

class ApiResponseHelper
{
    protected $response = [];

    public function setError($message, $statusCode = 500)
    {
        $this->response['status'] = false;
        $this->response['responseCode'] = $statusCode;
        $this->response['message'] = $message;
        return $this;
    }

    public function setResponse($key, $response)
    {
        $this->response['status'] = true;
        $this->response['responseCode'] = 200;
        $this->response['message'] = null;
        $this->response[$key] = $response;

        return $this;
    }

    public function setMessage($message)
    {
        $this->response['status'] = true;
        $this->response['responseCode'] = 200;
        $this->response['message'] = $message;

        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }
}
