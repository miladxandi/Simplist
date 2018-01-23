<?php


namespace Simplist\Model\Connection;


class Database
{

    public $ConnectionString;
    private function ConnectionChecker()
    {
        Try {
            $this->ConnectionString = new \PDO("mysql:host=localhost;dbname=milad.dev;charset=utf8", "root", "");
        }
        catch (\PDOException $exception)
        {
            $exception->getMessage();
        }
    }
}