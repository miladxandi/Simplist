<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 26/04/2018
 * Time: 05:58 AM
 */

namespace UnitTestings;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function Is_Model_Defined()
	{
		$this->assertDirectoryExists("public_html","It`s exists");
	}
}