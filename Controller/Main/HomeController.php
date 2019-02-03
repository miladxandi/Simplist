<?php

namespace Controller\Main;


use http\QueryString;
use Model\Logic\MainLogic\PostFunction;
use Model\Repository\MainFunction\PostRepository;
use Route\Show\View;

class HomeController
{
	private $Username;

	public function __construct()
	{
		$this->Posts = new PostFunction();
		$this->PostCon = new PostRepository();
	}

	public function Index()
	{
		//$Viewbag="SIMPLIST";
        $Viewbag = ['PostInfo'=>$this->Posts->Show()];
		View::Process("Main.Home.Index",$Viewbag);
	}

	public function Aboutus()
	{
		View::Process("Main.Home.Aboutus");
	}
    public function Post(string $QuerryString)
    {
        $Viewbag = ['PostInfo'=>$this->PostCon->GetPostByUrl(substr($QuerryString,16))];
        View::Process("Main.Home.Post",$Viewbag);
    }
}