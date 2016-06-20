<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Custom_watch
{
	// Member variables
	private static $watch;

	// Private Constructor to restrict the use of new keyword of instantiating an object
	private function __construct()
	{

	}

	/**
	* To create a watch object
	*
	* @access public
	* @param  void
	* @return object
	*/
	public static function create_watch()
	{
		// Check for exixting object
		if(!isset(self::$watch))
		{
			self::$watch = new Custom_watch();
		}
		self::$watch->display_weather();
		return self::$watch;
	}

	/**
	* For weather display functionality
	*
	* @access public
	* @param  void
	* @return void
	*/
	public static function display_weather()
	{
		echo "Display weather";
	}
}

$watch_obj = Custom_watch::create_watch();

?>