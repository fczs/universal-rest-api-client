<?php

namespace URAC\Http\RequestMethod;

use URAC\Contracts\RequestMethod;
use URAC\Http\RequestParams;
use URAC\Utils\CurlTrait;

class Get implements RequestMethod
{
    use CurlTrait;

    public function submit(RequestParams $params)
    {
        return $this->curl('GET', $params->getParam('endpoint'));
    }
}
