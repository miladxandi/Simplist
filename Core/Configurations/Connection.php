<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 26/04/2018
 * Time: 03:47 AM
 */

namespace Core\Configurations;


class Connection
{
	protected static $Host= "localhost";
	protected static $DatabaseName= "simplist_simplist";
	protected static $Collation= "utf8";
	protected static $Username= "root";
	protected static $Password= "";
	protected static $Drivers= ['First'=>'PDO', 'Second'=>'MYSQL', 'Third'=>'Microsoft_SQL'];
}