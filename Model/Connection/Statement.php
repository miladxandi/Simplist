<?php

namespace Model\Connection;

use Model\Connection;

class Statement
{
    private $PdoObject;
    private $Statement;

    public function __construct()
    {
        session_start();
        $this->PdoObject= new Connection\Database;
    }

    public function Commander($Query)
    {
        $this->Statement=$this->PdoObject->Connector()->prepare("$Query");
        $this->Statement->execute();
        return $this->Statement;
    }

}