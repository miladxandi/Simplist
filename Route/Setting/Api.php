<?php
return[
    '/api' => [
        'target' => 'Api.Home.Index',
        'allowed'=> 'get',
        'blocked'=> 'DELETE',
        'middleware'=>'Main.Home.Index',
        'important'=>false
    ]
];