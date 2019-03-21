<?php



//Autoload Files
require '../vendor/autoload.php';



require '../Route/Core/Router.php';



require '../Route/Constant/Main.php';



require '../public_html/View/Shared/Layouts.php';



\Route\Core\Router::Register();
