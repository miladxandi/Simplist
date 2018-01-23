<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 23/01/2018
 * Time: 01:28 PM
 */

namespace Core\Watcher;


final class Folders extends Core
{
    public $Main_Folders = array('Composer'=>"composer",'Content'=>"Content",'Controller'=>"Controller",'Core'=>"Core",'Security'=>"Security",'Model'=>"Model",'Route'=>"Route",'View'=>"View");
    public $Sub_Folders  = array();
}