<?php

namespace URAC\Utils;

trait CurlTrait
{
    /**
     * @param string $method
     * @param string $endpoint
     * @param string $postFields
     * @return mixed
     */
    public function curl($method, $endpoint, $postFields = '')
    {
        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_POST, $method == 'POST');
        if (!empty($postFields))
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        if ($method == 'DELETE')
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
