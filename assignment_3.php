<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Nexa_order
{

	// Member variables
	private $models = array();
	private $car = NULL;

	/**
	* To place order
	*
	* @access public
	* @param  string $model
	* @return array
	*/
	public function placeOrder($model)
	{
		$this->car = new Manufacture_car($model);
		array_push($models, $this->car->model);
		return $this->models;
	}
}
class Manufacture_car
{
	// Member variables
	private $model = '';

	// Parameterized constructor
	function __construct($maufacture_model)
	{
		$this->model = $maufacture_model;
	}
}

$obj = new Nexa_order();
$obj->placeOrder('Sedan');

?>