<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 21/03/2018
 * Time: 03:07 AM
 */

namespace Model\Repository\MainFunction;


use Model\Repository\BaseRepository;

class UrlRepository extends BaseRepository
{
    private $target = "target";
    private $String="";
    public function __construct()
    {
        parent::__construct();
        $this->Table = "urls";
        $this->PrimaryKey = "Id";
    }
    public function Insert($KeyValues)
    {
        foreach ($KeyValues as $Key => $Value)
        {
            $this->Keys=$this->Keys.$Key.',';
            if ($Key == 'target' && $Value == null)
                $this->Values=$this->Values.$this->StringGenerator($Value).',';
            else
                $this->Values=$this->Values.'"'.$Value.'",';

        }
        $this->Keys='('.substr($this->Keys,0,strlen($this->Keys)-1).')';
        $this->Values='('.substr($this->Values,0,strlen($this->Values)-1).')';
        var_dump($this->Keys);
        var_dump($this->Values);
        $Result = $this->rStatement->Commander("INSERT INTO {$this->Table} {$this->Keys} VALUES {$this->Values}");
        $Result->fetch(\PDO::FETCH_COLUMN);
        return $Result->rowCount();
    }

    public function Update($Id,$Url,$Target)
    {

        $Result = $this->rStatement->Commander("UPDATE {$this->Table} SET url='".$Url."', target='".$Target."' WHERE {$this->PrimaryKey}='".$Id."'");
        return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];

    }
    public function Delete($Id)
    {
        $Result = $this->rStatement->Commander("DELETE FROM {$this->Table} WHERE {$this->PrimaryKey}='".$Id."'");
        return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];

    }
    public function FindByUrl($Url)
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE url='".$Url."'");
        return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
    }
	public function FindById($Id)
	{
		$Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE Id='".$Id."'");
		return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
	}
    public function FindUrl()
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table}");
        return $Result->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function Counter($Url)
    {

        $Result = $this->rStatement->Commander("UPDATE {$this->Table} SET clicks=clicks+1 WHERE url='".$Url."'");
        return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];

    }
    public function StringGenerator($Url)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        if ($Url!="" || $Url!=null)
        {
            $this->String=$Url;

        }
        else
        {
            for ($i = 0; $i < 5; $i++) {
                $this->String .= $characters[rand(0, $charactersLength - 1)];
            }
        }

    }
}