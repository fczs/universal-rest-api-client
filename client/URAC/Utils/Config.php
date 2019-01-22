<?php

namespace URAC\Utils;

class Config
{
    /**
     * Returns configuration parameters from the specified file.
     *
     * @param string $path
     * @return mixed
     */
    public static function param($path)
    {
        $configPath = dirname(dirname(__DIR__)) . '/config/';
        $param = explode('.', $path);
        $file = include($configPath . $param[0] . '.php');
        // variable contains the entire array of the specified file
        $var =& $file;
        // walk through all the keys of the array
        for ($i = 1; $i <= count($param) - 1; $i++) {
            $var =& $var[$param[$i]];
        }
        // final variable
        return $var;
    }
}