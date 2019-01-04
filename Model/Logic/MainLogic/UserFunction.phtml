<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 13/04/2018
 * Time: 06:33 PM
 */

namespace Model\Logic\MainLogic;

use Core\Configurations\Routing;
use Model\Logic\DataContract;
use Model\Repository\MainFunction\UserRepository;
use Route\Show\View;

final class UserFunction implements DataContract
{
    private $User;
    private $Viewbag;
    private $ID = 0;

    public function __construct()
    {
        $this->User = new UserRepository();

        //self::$Subscriber = new cMailerLite();
    }

    public function Register()
    {
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Insert = $this->User->Insert($Firstname,$Lastname,$Username, $Password, $Email);
        if ($Insert== "1") {
            setcookie("username", null, time() - 3600, "", $_SERVER['HTTP_HOST'], Routing::$SecureProtocol, true);
            setcookie("Firstname",null,time()-3600,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
            setcookie("LoginToken",null,time()-3600,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
            setcookie("lcsrn_Validation",null,time()-3600,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
            $Viewbag = ['Success' => 'Your has been created!!'];
            View::Process("Panel.User.Signup", $Viewbag);
        } else {
            $Viewbag = ['Error' => 'Username or email exist!',];
            View::Process("Panel.User.Signup", $Viewbag);
        }
    }

    public function Update($QuerryString)
    {

    }

    public function Profile()
    {
        if (isset($_POST['submit']) == true) {
            $DefaultDirectory = "Content/Shared/Profile/Dp";
            $FileType = "." . substr($_FILES["Image"]["type"], 6);
            $Firstname = $_POST['Firstname'];
            $Lastname = $_POST['Lastname'];
            $Nickname = $_POST['Nickname'];
            $Username = $_POST['Username'];
            $Password = $_POST['Password'] == $_POST['Password-Verf'] && $_POST['Password'] != "" ? password_hash($_POST['Password'], 1) : "";
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $Image = $_FILES['Image']['name'];
            $Bio = $_POST['Bio'];
            if ($Image != null) {
                $TargetFile = $DefaultDirectory . basename($_POST['Firstname'] . $FileType);
                if (file_exists($TargetFile)) {
                    unlink($TargetFile);
                    $NewTargetFile = $DefaultDirectory . basename($_POST['Firstname'] . $FileType);
                    if (move_uploaded_file($_FILES["Image"]['tmp_name'], $NewTargetFile)) {
                        $Update = $this->User->Update($Firstname, $Lastname, $Nickname, $Username, $Password, $Email, $Phone, $NewTargetFile, $Bio);
                        if ($Update['Rows'] == 1) {
                            header("Location: /Panel");
                        } else {
                            header("Location: /Panel/Profile");

                        }

                    } else {
                        header("Location: /Panel/Profile");

                    }
                } else {
                    if (move_uploaded_file($_FILES["PostImage"]['tmp_name'], $TargetFile)) {
                        $Update = $this->User->Update($Firstname, $Lastname, $Nickname, $Username, $Password, $Email, $Phone, $TargetFile, $Bio);
                        if ($Update['Rows'] == 1) {
                            header("Location: /Panel");
                        } else {
                            header("Location: /Panel/Profile");

                        }

                    } else {
                        echo "Image did not upload!";
                        header("Location: /Panel/Profile");

                    }
                }
            } else {
                $Update = $this->User->Update($Firstname, $Lastname, $Nickname, $Username, $Password, $Email, $Phone, "Content/Shared/Profile/Dp/Avatar.png", $Bio);
                if ($Update['Rows'] == 1) {
                    header("Location: /Panel");
                } else {
                    header("Location: /Panel/Profile");

                }
            }
        } else {
            header("Location: /Panel/Profile");
        }
    }

    public function Delete($QuerryString)
    {

    }

    public function Show()
    {
        /*self::$Subscriber= new cMailerLite();


        self::$Subscriber::Subscribers();
        if (self::$Subscriber::Subscribers()!=null)
        {
            foreach (self::$Subscriber::Subscribers() as $Subscriber)
            {
                $email= get_object_vars($Subscriber->fields['0']);
                $Firstname = get_object_vars($Subscriber->fields['1']);
                $lname= get_object_vars($Subscriber->fields['2']);
                $phone= get_object_vars($Subscriber->fields['6']);
                //var_dump($Firstname['value']);
                self::$Viewbag = ['UserInfo'=>[
                    'Firstname'=> $Firstname['value'],
                    'lname'=>$lname['value'],
                    'email'=>$email['value'],
                    'phone'=>$phone['value']
                ]];
                self::$ID++;
                var_dump(self::$Viewbag['UserInfo']);

            }
            view::Process('Panel.Admin.Subs',self::$Viewbag);

        }
        else
        {
            view::Process('Panel.Admin.Subs');
        }*/
    }

    public function Login()
    {

            $Token = rand(5000, 1000000) . "-" . rand(5000, 1000000) . "-" . rand(5000, 1000000);
            $Username = addslashes($_POST['Username']);
            $Password = addslashes($_POST['Password']);
            $Login = $this->User->Login($Username, $Password, $Token);
            if ($Login['Rows'] == "11") {
                setcookie("Username", $Login['Values']['Username'], time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                setcookie("Firstname", $Login['Values']['Firstname'], time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                setcookie("LoginToken", password_hash($Token, 1), time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                setcookie("lcsrn_Validation", password_hash("true", 1), time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                header("Location: /Panel");
            } else {
                $Viewbag = ['Error' => 'نام کاربری یا گذرواژه اشتباه است.'];
                View::Process("Panel.User.Login", $Viewbag);
            }
    }

    public function LockScreen()
    {
        if (!isset($_COOKIE['Username']) && !($_COOKIE['Username'] != null || $_COOKIE['Username'] != "")) {
            header("Location: /Login");

        } else {
            if (isset($_POST['submit'])) {
                if (empty($_POST['password'])) {
                    setcookie("Error", "گذرواژه نباید خالی باشد", 0, "", $_SERVER['HTTP_HOST']);
                    setcookie("lcsrn_Validation", password_hash("false", 1), time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                    header("Location: /Lock");
                } else {

                    $Username = $_COOKIE['Username'];
                    $Token = rand(5000, 1000000) . "-" . rand(5000, 1000000) . "-" . rand(5000, 1000000);
                    $Password = addslashes($_POST['password']);
                    $Login = $this->User->Login($Username, $Password, $Token);
                    if ($Login['Rows'] == "11") {
                        setcookie("Username", $Login['Values']['Username'], time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                        setcookie("LoginToken", password_hash($Token, 1), time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                        if (password_verify("false", $_COOKIE['lcsrn_Validation'])) {
                            setcookie("lcsrn_Validation", password_hash("true", 1), time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                            header("Location: /Panel");
                        } else {
                            header("Location: /Login");
                        }
                    } else {
                        setcookie("Error", "گذرواژه اشتباه است.", 0);
                        setcookie("lcsrn_Validation", password_hash("false", 1), time() + 60 * 60 * 24 * 365, "", $_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                        header("Location: /Lock");
                    }
                }
            }
        }
    }
}