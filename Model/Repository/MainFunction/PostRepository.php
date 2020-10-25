<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 21/03/2018
 * Time: 03:07 AM
 */

namespace Model\Repository\MainFunction;


use Model\Repository\BaseRepository;

class PostRepository extends BaseRepository
{
	public $Fields;
	public function __construct()
	{
		parent::__construct();
		$this->Table = "posts";
		$this->PrimaryKey = "Post_Id";
	}
	public function Update($Id,$Name,$URL,$Summary,$Content,$Author,$Image)
	{
		$Result = $this->rStatement->Commander("UPDATE {$this->Table} SET Post_Name='".$Name."', Post_Url='".$URL."', Post_Summary='".$Summary."', Post_Content='".$Content."', Post_Author='".$Author."', Post_Image='".$Image."' WHERE {$this->PrimaryKey}={$Id}");
		return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];

	}
	public function Delete($Id)
	{
		$Result = $this->rStatement->Commander("DELETE FROM {$this->Table} WHERE {$this->PrimaryKey}='".$Id."'");
		return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];

	}
	public function GetPost()
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table}");
		return $Result->fetchAll(\PDO::FETCH_ASSOC);
	}
	public function GetPostById($PID)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->PrimaryKey}={$PID}");
		return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
	}
	public function GetPostByUrl($Url)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE Post_Url='{$Url}'");
		return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
	}
}