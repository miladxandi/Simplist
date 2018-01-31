<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 01/02/2018
 * Time: 12:23 AM
 */

namespace Model\Repository\MainFunction;


use Model\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct();
        $this->Table="Users";
        $this->PrimaryKey="user_Id";
    }

    public function GetUsername()
    {

    }

}