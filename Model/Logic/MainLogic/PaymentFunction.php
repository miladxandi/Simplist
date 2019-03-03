<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 28/05/2018
 * Time: 05:31 PM
 */

namespace Model\Logic\MainLogic;


use Model\Logic\DataContract;
use Route\Show\View;
use Plugins\Payment\Zarinpal;

final class PaymentFunction implements DataContract
{
    private $Payment;
    private $Cost;
    private $Name;
    private $Email;
    private $Product;
    private $Phone;

	public function __construct()
	{
        $this->Payment = new \Plugin\Payment\Zarinpal();
	}

	public function Register()
	{

	}

	public function Update($QuerryString)
	{

	}

	public function Delete($QuerryString)
	{


	}

	public function Show()
	{

	}

	public function Zarinpal()
	{
        if (isset($_POST['Submit']))
        {
            $this->Payment->Transaction();
        }
        else
        {
            View::Process("Payment.Zarinpal.Pay");
        }
	}
	public function Verify()
	{
        View::Process("Payment.Zarinpal.Verify");
	}
}