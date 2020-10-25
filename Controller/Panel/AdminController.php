<?php

namespace Controller\Panel;


use Controller\BaseController;
use Model\Logic\MainLogic\PostFunction;
use Model\Logic\MainLogic\UrlFunction;
use Model\Logic\MainLogic\UserFunction;
use Model\Repository\MainFunction\UserRepository;
use Route\Show\View;

class AdminController extends BaseController
{
    private $Post,$User,$Url;
    public function __construct()
    {
        $this->User= new UserFunction();
        $this->Repository= new UserRepository();
        $this->Post =  new PostFunction();
        $this->Url = new UrlFunction();
    }

    public function Index()
    {
        $Viewbag=['UserInfo'=>$this->Repository->FindByUser($_COOKIE['Username'])['Values']];
        View::Process("Panel.Admin.Panel",$Viewbag);
    }
    
    
    public function Profile()
    {
		$Viewbag = ['UserInfo' => $this->Repository->FindByUser($_COOKIE['Username'])['Values']];

     	if (isset($_POST))
		{
            $this->User->Profile();
		}
		else
		{
			View::Process("Panel.Admin.Profile", $Viewbag);
		}
    }

    
    public function Users()
    {
    	$Data = new \Model\Repository\MainFunction\UserRepository();
		$Viewbag = ['UserInfo'=>$Data->GetUsers()];

		View::Process("Panel.Admin.Users",$Viewbag);
    }

    
    public function NewPost()
    {
        $this->Post->Register();
        View::Process("Panel.Admin.NewPost");
    }
    
    
    public function Post()
    {
		$Viewbag = ['PostInfo'=>$this->Post->Show()];
		View::Process("Panel.Admin.Posts",$Viewbag);
    }
    
    
    public function PostDelete($QuerryString)
    {
        $this->Post->Delete($QuerryString);
    }
    
    
    public function PostUpdate($QuerryString)
    {
        $this->Post->Update($QuerryString);
    }

    public function NewUrl()
    {
        $this->Url->Register();
		View::Process("Panel.Admin.NewUrl");
    }
    
    
    public function Url()
    {
		$Viewbag = ['UrlInfo'=>$this->Url->Show()];
        View::Process("Panel.Admin.Url",$Viewbag);
    }
    
    
    public function UrlDelete($QuerryString)
    {
        $this->Url->Delete($QuerryString);
    }
    
    
    public function UrlUpdate($QuerryString)
    {
        $this->Url->Update($QuerryString);

    }
}