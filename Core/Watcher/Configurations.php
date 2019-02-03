<?php

namespace Core\Watcher;


final class Configurations extends Core
{
    public $Version = PHP_VERSION;
    public $OS = PHP_OS;
    public function MinVersion()
    {
        if ($this->Version>=7)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}