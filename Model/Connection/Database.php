<?php


namespace Model\Connection;


class Database
{
    private $ConnectionString;
    public function __construct()
    {
        Try {
            $this->ConnectionString = new \PDO("mysql:host=localhost;dbname=milad.dev;charset=utf8", "root", "");
        }
        catch (\PDOException $exception)
        {
            $exception->getMessage();
        }
    }
    public function Connector()
    {
        Try {
            $this->ConnectionString = new \PDO("mysql:host=localhost;dbname=milad.dev;charset=utf8", "root", "");
            return $this->ConnectionString;
        }
        catch (\PDOException $exception)
        {
            $exception->getMessage();
        }
    }
}