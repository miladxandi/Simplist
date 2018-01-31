<?php


namespace Model\Connection;


class Database
{
    protected $ConnectionString;
    public function __construct()
    {
        Try {
            $this->ConnectionString = new \PDO("mysql:host=localhost;dbname=simplist;charset=utf8", "root", "");
        }
        catch (\PDOException $exception)
        {
            $exception->getMessage();
        }
    }
    /*public function Connector()
    {
        Try {
            $this->ConnectionString = new \PDO("mysql:host=localhost;dbname=milad.dev;charset=utf8", "root", "");
            return $this->ConnectionString;
        }
        catch (\PDOException $exception)
        {
            $exception->getMessage();
        }
    }*/
}