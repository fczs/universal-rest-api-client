<?php

namespace URAC\Http;

use URAC\Contracts\HandleRequest;
use URAC\Http\RequestMethod\Get;
use URAC\Http\RequestMethod\Post;
use URAC\Http\RequestMethod\Delete;

class Request implements HandleRequest
{
    /**
     * @var RequestParams
     */
    protected $params;

    /**
     * Builds URL to request the API.
     *
     * @param string $url
     * @param array $queryParams
     * @return $this
     */
    public function params($url, $queryParams = [])
    {
        $endpoint = $url . '?' . urldecode(http_build_query($queryParams));
        $this->params = new RequestParams($endpoint);
        return $this;
    }

    /**
     * Submits GET request.
     *
     * @return \stdClass
     */
    public function get()
    {
        $requestMethod = new Get();
        return $requestMethod->submit($this->params);
    }

    /**
     * Submits POST request.
     *
     * @return \stdClass
     */
    public function post()
    {
        $requestMethod = new Post();
        return $requestMethod->submit($this->params);
    }

    /**
     * Submits DELETE request.
     *
     * @return \stdClass
     */
    public function delete()
    {
        $requestMethod = new Delete();
        return $requestMethod->submit($this->params);
    }
}
