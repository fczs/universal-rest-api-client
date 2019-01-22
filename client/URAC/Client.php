<?php

namespace URAC;

use URAC\Http\Request;
use URAC\Http\Response;
use URAC\Utils\Config;

class Client
{
    /**
     * @var Request
     */
    private $requestProvider;

    /**
     * @var Response
     */
    private $responseProvider;

    /**
     * @var string
     */
    private $api;

    /**
     * @var string
     */
    private $apiUri;

    /**
     * @param string $api
     */
    public function __construct($api)
    {
        $this->requestProvider = new Request();
        $this->responseProvider = new Response($api . '-error-log.txt');
        $this->api = $api;
        $this->apiUri = Config::param($api . '.URI');

        if (substr($this->apiUri, -1) !== '/')
            $this->apiUri .= '/';
    }

    /**
     * Executes the request to the third-party API.
     *
     * @param string $httpMethod
     * @param string $apiMethod
     * @param array $queryParams
     * @return mixed
     */
    public function request($httpMethod, $apiMethod, $queryParams = [])
    {
        $method = strtolower($httpMethod);
        $result = $this->requestProvider->params($this->apiUri . $apiMethod, $queryParams)->{$method}();
        return $this->responseProvider->fetch($result);
    }

    /**
     * @param string $param
     * @return mixed
     */
    public function config($param)
    {
        return Config::param($this->api . '.' . $param);
    }
}