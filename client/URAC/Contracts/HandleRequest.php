<?php

namespace URAC\Contracts;

interface HandleRequest
{
    /**
     * Builds URL to request the API.
     *
     * @param string $apiMethod
     * @param array $queryParams
     * @return $this
     */
    public function params($apiMethod, $queryParams);

    /**
     * Submits GET request.
     *
     * @return \stdClass
     */
    public function get();

    /**
     * Submits POST request.
     *
     * @return \stdClass
     */
    public function post();

    /**
     * Submits DELETE request.
     *
     * @return \stdClass
     */
    public function delete();
}
