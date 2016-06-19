<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Paypal
{

	function __construct()
	{
		echo "Paypal";
	}

	/**
	* Display required payment portal
	*
	* @access public
	* @param  void
	* @return void
	*/
	function display()
	{
		echo "Pay by Paypal Interface";
	}
}

class Credit_card
{
	function __construct()
	{
		echo "Credit card";
	}

	/**
	* Display required payment portal
	*
	* @access public
	* @param  void
	* @return void
	*/
	function display()
	{
		echo "Pay by Credit card Interface";
	}
}
class My_cart
{

	/**
	* Checks the amount to be paid
	*
	* @access public
	* @param  string $amount
	* @return void
	*/
	public function checkpayment($amount)
	{
		if($amount < 1000)
		{
			$payment = new Paypal();
			$payment->display();
		}
		else
		{
			$payment = new Credit_card();
			$payment->display();
		}
	}
}

$obj = new My_cart;
$obj->checkpayment(1500);

?>