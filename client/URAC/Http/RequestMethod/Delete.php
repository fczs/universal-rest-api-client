<?php

namespace URAC\Http\RequestMethod;

use URAC\Contracts\RequestMethod;
use URAC\Http\RequestParams;
use URAC\Utils\CurlTrait;

class Delete implements RequestMethod
{
    use CurlTrait;

    public function submit(RequestParams $params)
    {
        $endpoint = explode('?', $params->getParam('endpoint'));
        return $this->curl('DELETE', $endpoint[0], $endpoint[1]);
    }
}