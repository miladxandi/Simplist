<?php

namespace Controller\Main;


use Controller\BaseController;
use Model\Logic\MainLogic\PostFunction;
use Model\Repository\MainFunction\PostRepository;
use Route\Show\View;

class HomeController extends BaseController
{

	public function __construct()
	{
		$this->Function = new PostFunction();
		$this->Repository = new PostRepository();
	}

	public function Index()
	{
		//$Viewbag="SIMPLIST";
        $Viewbag = ['PostInfo'=>$this->Function->Show()];
		View::Process("Main.Home.Index",$Viewbag);
	}

	public function Aboutus()
	{
		View::Process("Main.Home.Aboutus");
	}
    public function Post(string $QuerryString)
    {
        $Viewbag = ['PostInfo'=>$this->Repository->GetPostByUrl(substr($QuerryString,16))];
        View::Process("Main.Home.Post",$Viewbag);
    }
}