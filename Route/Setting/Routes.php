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
    '/Login' => [
        'target'=>'Panel.UserController.Login',
        'verb'=> 'GET',
        'middleware'=>''
    ],
    '/login' => [
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