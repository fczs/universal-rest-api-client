<?php

namespace URAC\Contracts;

use URAC\Http\RequestParams;

interface RequestMethod
{
    /**
     * Submit the request with the specified parameters.
     *
     * @param RequestParams $params Request parameters
     * @return \stdClass Body of the API response
     */
    public function submit(RequestParams $params);
}
