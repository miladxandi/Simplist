<?php

namespace Model\Connection;

use Model\Connection;

class Statement extends Database
{
    private $Statement;

    public function __construct()
    {
        parent::__construct();
    }
    public function Commander($Query)
    {
        $this->Statement=$this->ConnectionString->prepare("$Query");
        $this->Statement->execute();
        return $this->Statement;
    }

}