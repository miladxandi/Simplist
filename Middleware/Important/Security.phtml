<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 17/03/2018
 * Time: 02:55 PM
 */

namespace Middleware\Important;
use Core\Configurations\Routing;
use Core\Security\Check;
use Core\Watcher\Basement;


class Security
{
    protected $CoreSecurity;
    protected $Configurations;
    protected static $BadArray;
    protected $Address;
    public function __construct()
    {
        Basement::MinVersion();
        Check::SecureProtocol(Routing::$SecureProtocol);
        self::CleanString($_REQUEST);
    }
    public function Index()
    {
        $this->__construct();
        return ['Status'=>true];

    }
    private static function CleanString($Request)
    {
        $BadArray = array('<script>','</script>',';',"content-type","href","'",'"','script','>','<',"{", "}", "|", "\\", "^", "~", "[", "]");

        foreach ($Request as $Key => $Value)
        {
            foreach ($BadArray as $mis) {
                if (str_contains($Value, $mis)) {

                    $_REQUEST[$Key] = "";
                    return true;
                }
            }
        }

    }

}