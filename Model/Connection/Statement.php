<?php

namespace Model\Connection;

use Model\Connection;

class Statement
{

    private $PdoObject;
    private $Statement;

    public function __construct($Query)
    {
        $this->PdoObject=new Connection\Database;
        $this->Statement=$this->PdoObject->ConnectionString->prepare("$Query");
        $this->Statement->execute();
        return $this->Statement;
    }

}