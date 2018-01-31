<?php
return[
    '/' => [
        'target' => 'Main.HomeController.Index',
        'verb'=> 'GET',
        'middleware'=>''

    ],
    '/Aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'verb'=> 'GET',
        'middleware'=>''

    ],
    '/aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'verb'=> 'GET',
        'middleware'=>''

    ],
    '/Panel/Login' => [
        'target'=>'Panel.UserController.Login',
        'verb'=> 'GET',
        'middleware'=>''
    ],
    '/Panel/login' => [
        'target'=>'Panel.UserController.Login',
        'verb'=> 'GET',
        'middleware'=>''
    ],
    '/NotFound' => [
        'target'=>'Helper.ErrorController.NotFound',
        'verb'=> 'GET',
        'middleware'=>''
    ],
];