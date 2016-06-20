<?php

class Custom_watch
{
	// Member variables
	private static $watch;

	// Private Constructor to restrict the use of new keyword
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
		return self::$watch;
		self::$watch->display_weather();
	}

	/**
	* For weather display functionality
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function display_weather()
	{
		echo "Display weather";
	}
}

$watch_obj = Custom_watch::create_watch();

?>