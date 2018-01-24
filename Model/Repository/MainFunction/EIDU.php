<?php

namespace Model\Repository\MainFunction;

use Model\Connection;

class EIDU
{
    private $Database;
    private $Object;
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

             return $this->Database->Commander("$Query")->fetch(\PDO::FETCH_ASSOC);

        }
        else if ($Query==null)
        {

             return $this->Database->Commander("SELECT * FROM products")->fetch(\PDO::FETCH_ASSOC);

        }
        else
        {
            echo "Not connected.";
        }
    }


}