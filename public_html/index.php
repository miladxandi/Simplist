<?php

require '../Core/Requirement/Autoloader.phtml';
//require '../vendor/autoload.php';
require '../Route/Core/Router.phtml';
require '../Route/Constant/Main.phtml';
require '../public_html/View/Shared/Layouts.phtml';
\Route\Core\Router::Register();
