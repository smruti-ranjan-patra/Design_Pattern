<?php

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Veg
{
	function __construct()
	{
		echo "Enjoy a veg meal" . "<br>";
	}

	/**
	* Display appropriate Menu
	*
	* @access public
	* @param  void
	* @return void
	*/
	function display()
	{
		echo "Please select items from our Veg Menu" . "<br>";
	}
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Non_veg
{
	function __construct()
	{
		echo "Enjoy a non-veg meal" . "<br>";
	}

	/**
	* Display appropriate Menu
	*
	* @access public
	* @param  void
	* @return void
	*/
	function display()
	{
		echo "Please select items from our Non-veg Menu" . "<br>";
	}
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Choice
{
	/**
	* Display required Menu
	*
	* @access public
	* @param  string $amount
	* @return void
	*/
	public function check_preference($food_type)
	{
		if(strcasecmp($food_type, 'veg') == 0)
		{
			$menu_obj = new Veg();
			$menu_obj->display();
		}
		elseif(strcasecmp($food_type, 'non-veg') == 0)
		{
			$menu_obj = new Non_veg();
			$menu_obj->display();
		}
	}
}

$obj = new Choice;
$obj->check_preference('veg');

?>