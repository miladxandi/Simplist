<?php

namespace Plugin\Utility;

class Jsoner
{
    public static function Json( $Data,int $Code = 200, $Mode=JSON_UNESCAPED_SLASHES)
    {
        http_response_code($Code);
        header('Content-Type: application/json');
        echo \GuzzleHttp\json_encode($Data,$Mode);
    }
}