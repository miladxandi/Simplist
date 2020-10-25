<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 08/01/2019
 * Time: 07:14 AM
 */

namespace UnitTestings\Api;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;


class ApiTest extends TestCase
{
    public function testExample()
    {
        $response = new Client(['base_uri' => 'http://simplist.local/', 'timeout'  => 2.0,]);
        $this->assertEquals(200,$response->get('api?=5')->getStatusCode());
    }

}