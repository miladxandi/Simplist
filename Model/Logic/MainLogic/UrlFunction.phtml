<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 13/04/2018
 * Time: 06:35 PM
 */

namespace Model\Logic\MainLogic;


use Model\Logic\DataContract;
use Model\Repository\MainFunction\UrlRepository;
use Route\Show\View;

final class UrlFunction implements DataContract
{
	private $Url;

	public function __construct()
	{
		$this->Url = new UrlRepository();
	}

	public function Register()
	{
		if (isset($_POST['submit']))
		{

			$Url = $_POST['Url'];
			$Target = $_POST['Target'];
			$Insert = $this->Url->Insert($Url,$Target);
			if ($Insert == 1) {
				header("Location: /Panel/NewUrl");
			} else {
				header("Location: /Panel/NewUrl");

			}
		}
	}

	public function Update($QuerryString)
	{
        $Id = $QuerryString['url'];
		if ($this->Url->FindById($Id)['Rows']==1)
		{
			$Viewbag = ['UrlInfo'=>$this->Url->FindById($Id)['Values']];
			$UrlInfo = $Viewbag['UrlInfo'][0];

			if (isset($_POST['submit'])) {

				$Id = $_POST['Id'];
				$Url = $_POST['Url'];
				$Target = $_POST['Target'];

				$Update = $this->Url->Update($Id,$Url,$Target);
				if ($Update['Rows'] == 1) {
					header("Location: /Panel/Url");
				} else {
					header("Location: /Panel/Url/Update/?url=".$UrlInfo['Id']);
				}
			}
			View::Process("Panel.Admin.UrlUpdate",$Viewbag);
		}
		else
		{
			View::Process("Helper.Home.Error404");
		}
	}

	public function Delete($QuerryString)
	{
        $Id = $QuerryString['url'];

		if ($this->Url->FindById($Id)['Rows']==1)
		{
			$Viewbag = ['UrlInfo'=>$this->Url->FindById($Id)['Values']];
			$UrlInfo = $Viewbag['UrlInfo'][0];
			$Id = $UrlInfo['Id'];
			$Delete = $this->Url->Delete($Id);
			if ($Delete['Rows'] == 1) {
				header("Location: /Panel/Url");
			} else {
				header("Location: /Panel/Url/Update/?url=0");
			}
		}
		else
		{
			View::Process("Helper.Home.Error404");
		}

	}

	public function Show()
	{
		return $this->Url->FindUrl();
	}
}