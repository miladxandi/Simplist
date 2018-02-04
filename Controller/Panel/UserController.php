<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 31/01/2018
 * Time: 02:23 AM
 */

namespace Controller\Panel;


use Model\Repository\MainFunction\UserRepository;
use Route\Show\View;

class UserController
{
    private $Data;
    public function __construct()
    {
       $this->Data= new UserRepository();
    }
    public function Login()
    {
        $Item= $this->Data->Login('Admin','123456');
        View::Process("Panel.User.Login",compact('Item'));
    }
    public function Signup()
    {
        View::Process("Panel.User.Signup");
    }
    public function ForgetPassword()
    {
        View::Process("Panel.User.ForgetPassword");
    }
    public function Dashboard()
    {
        View::Process("Panel.User.Dashboard");
    }
    public function Maps()
    {
        View::Process("Panel.User.Maps");
    }
}