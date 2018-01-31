<?php
return[
    '/' => [
        'target' => 'Main.HomeController.Index',
        'verb'=> 'GET'
    ],
    '/Aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'verb'=> 'GET'
    ],
    '/Login' => [
        'target'=>'Panel.UserController.Login',
        'verb'=> 'GET',
        'middleware'=>''
    ],
];