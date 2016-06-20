<?php
define("PI", 22/7, TRUE);

/**
* Interface
*
* @author Smruti Ranjan
*/
interface Shape
{
	public function area();
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Rectangle implements Shape
{
	// data members
	private $l;
	private $h;

	/**
	* Constructor to assign the dimensions
	*
	* @access public
	* @param  integer $length, integer $height
	* @return void
	*/
	public function __construct($length, $height)
	{
		$this->l = $length;
		$this->h = $height;
	}

	/**
	* For displaying area
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function area()
	{
		echo "Area of Rectangle = " . $this->l * $this->h;
	}
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Circle implements Shape
{
	// Data members
	private $r;

	/**
	* Constructor to assign the dimensions
	*
	* @access public
	* @param  integer $radius
	* @return void
	*/
	public function __construct($radius)
	{
		$this->r = $radius;
	}

	/**
	* For displaying area
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function area()
	{
		echo "Area of Circle = " . PI * $this->r * $this->r;
	}
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Shape_factory
{
	/**
	* Constructor to assign the type of food
	*
	* @access public
	* @param  integer $radius
	* @return void
	*/
	public function __construct($type)
	{
		if(strcasecmp($type, 'rectangle') == 0)
		{
			$rect = new Rectangle(2, 5);
			$rect->area();
		}
		elseif(strcasecmp($type, 'circle') == 0)
		{
			$rect = new Circle(2);
			$rect->area();
		}
	}
}

$obj = new Shape_factory('rectangle');
echo "<br>";
$obj = new Shape_factory('circle');

?>