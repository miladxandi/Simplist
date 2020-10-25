<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 04/03/2019
 * Time: 02:13 AM
 */

namespace Controller;


use Plugin\Utility\Jsoner;

class BaseController
{
    protected $Repository,$Function;
    public function MakeJson($Data)
    {
        Jsoner::Json($Data);
    }
}