<?php


namespace Model\Repository;
use Model\Connection;
//use Illuminate\Database\Capsule;

abstract class BaseRepository
{
    protected static $Model;
    protected $rStatement;
    public $Table;
    protected $PrimaryKey;
    protected $Name;
    protected $Pass;
    protected $Mail;
    protected $Token;
    public function __construct()
    {
        $this->rStatement=new Connection\Statement();
    }
    public function Find(int $ID)
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table} WHERE {$this->PrimaryKey}={$ID}");
        return $Result->fetch(\PDO::FETCH_ASSOC);
    }
    public function All()
    {
        $Result = $this->rStatement->Commander("SELECT * FROM {$this->Table}");
        return $Result->fetchAll(\PDO::FETCH_ASSOC);
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