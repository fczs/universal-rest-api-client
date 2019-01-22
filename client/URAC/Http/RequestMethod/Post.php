<?php

namespace URAC\Http\RequestMethod;

use URAC\Contracts\RequestMethod;
use URAC\Http\RequestParams;
use URAC\Utils\CurlTrait;

class Post implements RequestMethod
{
    use CurlTrait;

    public function submit(RequestParams $params)
    {
        $endpoint = explode('?', $params->getParam('endpoint'));
        return $this->curl('POST', $endpoint[0], $endpoint[1]);
    }
}
