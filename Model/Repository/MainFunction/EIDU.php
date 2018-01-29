<?php

namespace Model\Repository\MainFunction;

use Model\Connection;

class EIDU
{
    private $Database;
    private $DbValue;
    private $Index=0;
    private $Object=array();
    private $Table;
    private $PrimaryKey;

    public function __construct()
    {
        $this->Database = new Connection\Statement();
    }
    public function Custom($Query=null)
    {
        if ($Query!=null)
        {

            while($this->DbValue == $this->Database->Commander("$Query")->fetch(\PDO::FETCH_ASSOC))
            {

                $this->Object[$this->Index]=$this->DbValue;
                $this->Index++;
            }
            return $this->Object;
        }
        else if ($Query=="SelectAll")
        {
            while($this->DbValue == $this->Database->Commander("SELECT * FROM products")->fetch(\PDO::FETCH_ASSOC))
            {
                $this->Object[$this->Index]=$this->DbValue;
                $this->Index++;
            }
            return $this->Object;
        }
        else
        {
            echo "There is a problem with your values.";
        }
    }


}