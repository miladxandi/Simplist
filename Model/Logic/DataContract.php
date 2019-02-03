<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 13/04/2018
 * Time: 05:52 PM
 */

namespace Model\Logic;


interface DataContract
{
	public function __construct();
	public function Register();
	public function Update($QuerryString);
	public function Delete($QuerryString);
	public function Show();

}