<?php
return[
    '/' => [
        'target' => 'Main.HomeController.Index',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''

    ],
    '/Aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''

    ],
    '/aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''

    ],
    '/Panel' => [
        'target'=>'Panel.UserController.Dashboard',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ],
    '/panel' => [
        'target'=>'Panel.UserController.Dashboard',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ],
    '/NotFound' => [
        'target'=>'Helper.ErrorController.NotFound',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/Content' => [
        'target'=>'Helper.ErrorController.NotFound',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/content' => [
        'target'=>'Helper.ErrorController.NotFound',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/login' => [
        'target'=>'Panel.UserController.Login',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ],
    '/Login' => [
        'target'=>'Panel.UserController.Login',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ],
    '/Signup' => [
    'target'=>'Panel.UserController.Signup',
    'gverb'=> 'GET',
    'pverb'=> 'POST',
    'middleware'=>''
    ],
    '/signup' => [
        'target'=>'Panel.UserController.Signup',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ],
    '/Panel/Maps' => [
        'target'=>'Panel.UserController.Maps',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/Panel/maps' => [
        'target'=>'Panel.UserController.Maps',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
];