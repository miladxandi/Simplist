<?php

namespace Core\Security;

use Core\Watcher\Configurations;

class Check
{
    public $Software;
    public function Func()
    {
        $this->Software= new Configurations();
        $oPer= $this ->Software->OS;
        return $oPer;
    }
}