<?php


namespace Model\Repository;
use Model\Connection;
//use Illuminate\Database\Capsule;

abstract class BaseRepository
{
    protected static $Model;
    protected $rStatement;
    public $Table;
    protected $PrimaryKey,$Name,$Pass,$Mail,$Token,$Keys,$Values, $UpdatePhrase;

    public function __construct()
    {
        $this->rStatement=new Connection\Statement();
    }
    public function Find(int $ID)
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->PrimaryKey}={$ID} ORDER BY {$this->PrimaryKey} DESC ");
        return $Result->fetch(\PDO::FETCH_ASSOC);
    }
    public function All()
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table}  ORDER BY {$this->PrimaryKey} DESC ");
        return $Result->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function Delete($Id)
    {
        $Result = $this->rStatement->Commander("DELETE FROM {$this->Table} WHERE {$this->PrimaryKey}='".$Id."'");
        return ['Values'=>$Result->fetchAll(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
    }
    public function Insert($KeyValues)
    {
        foreach ($KeyValues as $Key => $Value)
        {
            $this->Keys=$this->Keys.$Key.',';
            if (is_int($Value) && strtolower($Key)!='password')
                $this->Values=$this->Values.$Value.',';
            else
                $this->Values=$this->Values.'"'.$Value.'",';
        }

        $this->Keys='('.substr($this->Keys,0,strlen($this->Keys)-1).')';
        $this->Values='('.substr($this->Values,0,strlen($this->Values)-1).')';
        $Result = $this->rStatement->Commander("INSERT INTO {$this->Table} {$this->Keys} VALUES {$this->Values}");
        $Result->fetch(\PDO::FETCH_COLUMN);
        return $Result->rowCount();
    }
    public function FindByCustom(string $Field, string $Value)
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$Field}='".$Value."'");
        return ['Values'=>$Result->fetch(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
    }
    public function CustomUpdate(array $Values ,string $ConditionField =null, string $ConditionValue =null)
    {
        $this->UpdatePhrase=null;
        foreach ($Values as $Key => $Value)
        {
            $this->UpdatePhrase = "$this->UpdatePhrase {$Key}='".$Value."' ,";
        }
        $this->UpdatePhrase = substr($this->UpdatePhrase,0,-1);
        if ($ConditionField != null && $ConditionValue != null)
        {
            $this->UpdatePhrase = "$this->UpdatePhrase WHERE {$ConditionField}='".$ConditionValue."'";
        }
        $Result = $this->rStatement->Commander("UPDATE {$this->Table} SET {$this->UpdatePhrase}");
        return ['Values'=>$Result->fetch(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
    }
    public function GetCustom(string $Column,string $Field,string $Value)
    {
        if ( $Field ==null && $Value == null)
        {
            $Result = $this->rStatement->Commander("SELECT {$Column} FROM {$this->Table}");
            return ['Values'=>$Result->fetch(\PDO::FETCH_ASSOC),'Rows'=>$Result->rowCount()];
        }
        else
        {
            $Result = $this->rStatement->Commander("SELECT {$Column} FROM {$this->Table} WHERE {$Field}='".$Value."'");
            return ['Values'=>$Result->fetch(\PDO::FETCH_ASSOC)["$Column"],'Rows'=>$Result->rowCount()];
        }
    }

}