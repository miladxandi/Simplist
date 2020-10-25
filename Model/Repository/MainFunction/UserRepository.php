<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 01/02/2018
 * Time: 12:23 AM
 */

namespace Model\Repository\MainFunction;


use Model\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
	public $Fields;

	public function __construct()
	{
		parent::__construct();
		$this->Table = "users";
		$this->PrimaryKey = "Id";
		$this->Name = "Username";
		$this->Mail = "Email";
		$this->Pass = "Password";
		$this->Token = "LoginToken";
	}

	public function Username($Username)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->Name}='".$Username."'");
		$Result->fetch(\PDO::FETCH_COLUMN);
		return $Result->rowCount();
	}

	public function Email($Email)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->Mail}='".$Email."'");
		$Result->fetch(\PDO::FETCH_COLUMN);
		return $Result->rowCount();
	}

	public function Password($Password)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->Pass}='".$Password."'");
		$Result->fetch(\PDO::FETCH_COLUMN);
		return $Result->rowCount();
	}

	public function Login($Username, $Password, $Token)
	{
		$Result = $this->FindByUser($Username);
		if ($Result['Rows']==1 && password_verify($Password,$Result['Values']['Password']))
        {
		    $Tokenize=$this->Tokenizer($Token,$Username);
		    if ($Tokenize==1)
		    {

		    	return ['Values'=>$Result['Values'],'Rows'=>11];
		    }
		    else
		    {
		    	return ['Values'=>0,'Rows'=>0];
		    }
        }
	}
	public function Tokenizer($Token,$Username)
	{
		$Result = $this->rStatement->Commander("UPDATE {$this->Table} SET {$this->Token}='".$Token."' WHERE {$this->Name}='".$Username."'");
		$Result->fetchAll(\PDO::FETCH_ASSOC);
		return $Result->rowCount();
	}
	public function Update($Firstname,$Lastname,$Username,$Password,$Email,$Image)
	{
		$Result = $this->rStatement->Commander("UPDATE {$this->Table} SET Firstname='".$Firstname."',Lastname='".$Lastname."',Password='".password_hash($Password,1)."',Email='".$Email."',Image='".$Image."' WHERE {$this->Name}={$Username}");
		return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
	}
	public function GetUsers()
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table}");
		return $Result->fetchAll(\PDO::FETCH_ASSOC);
	}
	public function FindByUser($Username)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->Name}='".$Username."'");
		return ['Values'=>$Result->fetch(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
	}
	public function FindByEmail($Email)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->Mail}='".$Email."'");
		return ['Values'=>$Result->fetch(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
	}
}