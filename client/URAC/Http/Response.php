<?php

namespace URAC\Http;

use URAC\Contracts\HandleResponse;
use URAC\Utils\LogTrait;

class Response implements HandleResponse
{
    use LogTrait;

    /**
     * Name of the log file.
     *
     * @var string
     */
    protected $fileName;

    /**
     * @param string $fileName
     */
    public function __construct($fileName = 'unknown-api-error-log.txt')
    {
        $this->fileName = $fileName;
    }

    /**
     * @param mixed $response
     * @return mixed
     */
    public function fetch($response)
    {
        if ($response) {
            $response = json_decode($response);
            if ($response) {
                return $response;
            } else {
                $this->log($this->fileName, 'REQUEST ERROR: invalid response');
            }
        } else {
            $this->log($this->fileName,'REQUEST ERROR: no response');
        }

        return null;
    }
}
