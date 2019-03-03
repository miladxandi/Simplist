<?php

namespace Plugin\Utility;

class Jsoner
{
    public static function Json(string $Data,int $Code = 200)
    {
        http_response_code($Code);
        header('Content-Type: application/json');
        echo \GuzzleHttp\json_decode(\GuzzleHttp\json_encode($Data));
    }
}