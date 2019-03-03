<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 21/10/2018
 * Time: 05:40 AM
 */

namespace Controller\Api;


class HomeController
{
    public function Index($QueryString)
    {
        http_response_code(200);
        header('Content-Type: application/json');
        echo \GuzzleHttp\json_decode(\GuzzleHttp\json_encode('{"Status":{"Code":200,"Text":"Success"},"Response":"'."$QueryString".'"}'));
    }
}