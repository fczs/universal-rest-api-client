<?php

namespace URAC\Contracts;

interface ThirdPartyApi
{
    /**
     * Executes the request to the third-party API.
     *
     * @param string $method
     * @param string $apiMethod
     * @param array $queryParams
     * @return mixed
     */
    public function request($method, $apiMethod, $queryParams = []);
}
