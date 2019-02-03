<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 20/03/2018
 * Time: 02:17 AM
 */

namespace Middleware\Panel;


use Core\Configurations\Routing;
use Middleware\Important\Security;
use Model\Repository\MainFunction\UserRepository;
use Route\Show\View;

class AdminMiddleware
{
	public $Db;
	public function __construct()
	{
		$this->DB = new UserRepository();
		$this->Security= new Security();

	}
	public function Index()
	{
		return $this->PanelCookieS();
	}
	public function Profile()
	{
		return $this->PanelCookieS();
	}
	public function Login()
	{

        if  (isset($_GET['Logout']) && $_GET['Logout'] == "True")
        {
		    if(isset($_COOKIE['Firstname'])|| isset($_COOKIE['Username']))
		    {
		    	setcookie("Firstname", "", Time() - 36000,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
		    	setcookie("Username", "Logout",Time() + 36000,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
		    	setcookie("LoginToken", "Logout",Time() - 36000,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
		    	return ['Status'=> true];
		    }
		    else
		    {
		    	return ['Status'=> true];
		    }
        }
        else
        {
            return ['Status'=>true];
        }

	}
	public function Lock()
	{

		if(isset($_COOKIE['Username']))
		{
			setcookie("lcsrn_Validation",password_hash("false",1),time()+60*60*24*365,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
			setcookie("LoginToken", "Logout",Time() - 36000,"",$_SERVER['HTTP_HOST']);
			return ['Status'=> true];
		}
		else
		{
			setcookie("lcsrn_Validation",password_hash("false",1),time()+60*60*24*365,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
			setcookie("LoginToken", "Logout",Time() - 36000,"",$_SERVER['HTTP_HOST']);
			return ['Status'=> false,'Route'=>'/Login?Logout=True'];
		}

	}
	public function NewPost()
	{
		return $this->EditorCookieS();
	}
	public function Post()
	{
		return $this->EditorCookieS();
	}
	public function Users()
	{
		return $this->AdminCookieS();
	}
	public function PostDelete()
	{
		return $this->EditorCookieS();
	}
	public function PostUpdate()
	{
		return $this->EditorCookieS();
	}
	private function PanelCookieS()
	{
		if(isset($_COOKIE['Username']) && isset($_COOKIE['lcsrn_Validation']) && $this->DB->FindByUser($_COOKIE['Username'])['Rows']==1 && password_verify("true",$_COOKIE['lcsrn_Validation']) && password_verify($this->DB->FindByUser($_COOKIE['Username'])['Values']['LoginToken'],$_COOKIE['LoginToken']))
		{
			return ['Status'=> true];
		}
		elseif(isset($_COOKIE['Username'])==false || isset($_COOKIE['lcsrn_Validation'])==false || $this->DB->FindByUser($_COOKIE['Username'])['Rows']==0 || password_verify("true",$_COOKIE['lcsrn_Validation'])==false || password_verify($this->DB->FindByUser($_COOKIE['Username'])['Values']['LoginToken'],$_COOKIE['LoginToken'])==false)
		{
			return ['Status'=> false,'Route'=>'/Login?Logout=True'];
		}
		else
		{
			return ['Status'=> false,'Route'=>'/Forbidden'];
		}
	}
	private function EditorCookieS()
	{
		if(isset($_COOKIE['Username'])==true && isset($_COOKIE['lcsrn_Validation'])==true && $this->DB->FindByUser($_COOKIE['Username'])['Rows']==1 && ($this->DB->FindByUser($_COOKIE['Username'])['Values']['Type']=="Admin" || $this->DB->FindByUser($_COOKIE['Username'])['Values']['Type']=="Editor") && password_verify("true",$_COOKIE['lcsrn_Validation']) && password_verify($this->DB->FindByUser($_COOKIE['Username'])['Values']['LoginToken'],$_COOKIE['LoginToken']))
		{
			return ['Status'=> true,'Info'=>""];
		}
		elseif(isset($_COOKIE['Username'])==false ||isset($_COOKIE['lcsrn_Validation']) || $this->DB->FindByUser($_COOKIE['Username'])['Rows']==0 || password_verify("true",$_COOKIE['lcsrn_Validation'])==false || password_verify($this->DB->FindByUser($_COOKIE['Username'])['Values']['LoginToken'],$_COOKIE['LoginToken']))
		{

			return ['Status'=> false,'Route'=>'/Login?Logout=True'];
		}
		else
		{
			return ['Status'=> false,'Route'=>'/Forbidden'];
		}
	}
	private function AdminCookieS()
	{
		if(isset($_COOKIE['Username'])==true && isset($_COOKIE['lcsrn_Validation'])==true && $this->DB->FindByUser($_COOKIE['Username'])['Rows']==1 && $this->DB->FindByUser($_COOKIE['Username'])['Values']['Type']=="Admin" && password_verify("true",$_COOKIE['lcsrn_Validation'])==false && password_verify($this->DB->FindByUser($_COOKIE['Username'])['Values']['LoginToken'],$_COOKIE['LoginToken']))
		{
			return ['Status'=> true,'Info'=>""];
		}
		elseif(isset($_COOKIE['Username'])==false ||isset($_COOKIE['lcsrn_Validation'])==false || $this->DB->FindByUser($_COOKIE['Username'])['Rows']==0 || password_verify("true",$_COOKIE['lcsrn_Validation'])==false || password_verify($this->DB->FindByUser($_COOKIE['Username'])['Values']['LoginToken'],$_COOKIE['LoginToken'])==false)
		{
			return ['Status'=> false,'Route'=>'/Login?Logout=True'];
		}
		else
		{
			return ['Status'=> false,'Route'=>'/Forbidden'];
		}
	}

}