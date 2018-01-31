<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 31/01/2018
 * Time: 02:23 AM
 */

namespace Controller\Panel;


use Route\Show\View;

class UserController
{

    public function Login()
    {
        View::Process("Panel.User.Login");
    }
}