<?php

namespace URAC\Utils;

trait LogTrait
{
    /**
     * @param string $file Log file name
     * @param string $msg
     */
    public function log($file, $msg)
    {
        file_put_contents(dirname(dirname(__DIR__))  . '/log/' . $file,
            date("Y-m-d H:i:s") . ' => ' . $msg . PHP_EOL, FILE_APPEND);
    }
}
