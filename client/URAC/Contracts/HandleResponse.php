<?php

namespace URAC\Contracts;

interface HandleResponse
{
    /**
     * Decodes the response, checks the response code
     * and writes an error message to the log if the issue occurs.
     *
     * @param mixed $response
     * @return mixed
     */
    public function fetch($response);
}
