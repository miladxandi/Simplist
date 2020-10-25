<?php
return[
    '/' => [
        'target' => 'Main.Home.Index',
        'get'=> true,
        'post'=> false,
        'middleware'=>'Main.Home.Index',
        'important'=>false
    ],
    '/aboutus' => [
        'target'=>'Main.Home.Aboutus',
        'get'=> true,
        'post'=> false,
        'middleware'=>'Main.Home.Aboutus'

    ],
    '/notfound' => [
        'target'=>'Helper.Error.Error404',
        'get'=> true,
        'post'=> false,
        'middleware'=>''
    ],
    '/internalerror' => [
        'target'=>'Helper.Error.Error500',
        'get'=> true,
        'post'=> false,
        'middleware'=>''
    ],
    '/badrequest' => [
        'target'=>'Helper.Error.Error402',
        'get'=> true,
        'post'=> false,
        'middleware'=>''
    ],
    '/forbidden' => [
        'target'=>'Helper.Error.Error403',
        'get'=> true,
        'post'=> false,
        'middleware'=>''
    ],
    '/methodnotallowed' => [
        'target'=>'Helper.Error.Error405',
        'get'=> true,
        'post'=> false,
        'middleware'=>''
    ],
    '/content' => [
        'target'=>'Helper.Error.NotFound',
        'get'=> true,
        'post'=> false,
        'middleware'=>''
    ],
    '/login' => [
        'target'=>'Panel.User.Login',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.Login'
    ],
    '/signup' => [
        'target'=>'Panel.User.Signup',
        'get'=> true,
        'post'=> true,
        'middleware'=>''
    ],
    '/documentation'=>[
        'target'=>'Main.Home.Documentation',
        'get'=> true,
        'post'=> true,
        'middleware'=>''
    ],
    '/panel'=>[
        'target'=>'Panel.Admin.Index',
        'get'=> true,
        'post'=> false,
        'middleware'=>'Panel.Admin.Index'
    ],
    '/panel/posts/newpost'=>[
        'target'=>'Panel.Admin.NewPost',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.NewPost'
    ],
    '/panel/users'=>[
        'target'=>'Panel.Admin.Users',
        'get'=> true,
        'post'=> false,
        'middleware'=>'Panel.Admin.Users'
    ],
    '/Test'=>[
        'target'=>'Test.Index.Call',
        'get'=> true,
        'post'=> true,
        'middleware'=>''
    ],
    '/Testresponse'=>[
        'target'=>'Test.Index.Response',
        'get'=> true,
        'post'=> true,
        'middleware'=>''
    ],
    '/Testcallback'=>[
        'target'=>'Test.Index.Callback',
        'get'=> true,
        'post'=> true,
        'middleware'=>''
    ],
    '/posts/'=>[
        'target'=>'Main.Home.Post',
        'get'=> true,
        'post'=> false,
        'middleware'=>'Main.Home.Post'
    ],
    '/panel/posts'=>[
        'target'=>'Panel.Admin.Post',
        'get'=> true,
        'post'=> false,
        'middleware'=>'Panel.Admin.Post'
    ],
    '/panel/posts/delete/'=>[
        'target'=>'Panel.Admin.PostDelete',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.PostDelete'
    ],
    '/panel/posts/update/'=>[
        'target'=>'Panel.Admin.PostUpdate',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.PostUpdate'
    ],
    '/panel/url'=>[
        'target'=>'Panel.Admin.Url',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.Post'
    ],
    '/panel/url/newurl'=>[
        'target'=>'Panel.Admin.NewUrl',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.NewPost'
    ],
    '/panel/url/delete/'=>[
        'target'=>'Panel.Admin.UrlDelete',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.PostDelete'
    ],
    '/panel/url/update/'=>[
        'target'=>'Panel.Admin.UrlUpdate',
        'get'=> true,
        'post'=> true,
        'middleware'=>'Panel.Admin.PostUpdate'
    ],
];