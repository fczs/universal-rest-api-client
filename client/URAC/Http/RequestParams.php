<?php

namespace URAC\Http;

class RequestParams
{
    /**
     * Requested API method URL with params.
     *
     * @var string
     */
    private $endpoint;

    /**
     * Initialise parameters.
     *
     * @param string $endpoint
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Returns request parameter by its name.
     *
     * @param string $paramName
     * @return mixed
     */
    public function getParam($paramName)
    {
        return $this->$paramName;
    }
}
