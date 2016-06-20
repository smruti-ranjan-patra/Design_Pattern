<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Connection
{
	// Member variables
	public static $conn = 0;
	private $host_name = null;
	private $user_name = null;
	private $password = null;
	private $db_name = null;
	public static $connection_obj = null;

	/**
	* Constructor to initialize
	*
	* @access public
	* @param  void
	* @return void
	*/
	private function __construct()
	{
		$this->host_name = 'localhost';
		$this->user_name = 'root';
		$this->password = 'mindfire';
		$this->db_name = 'registration';
		self::$conn = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->db_name);
	}

	/**
	* To check of exixting connection object
	*
	* @access public
	* @param  void
	* @return object
	*/
	public static function check_connection()
	{
		if(self::$connection_obj == NULL)
		{
			self::$connection_obj = new connection;
			echo "New connection created";
		}
		return self::$connection_obj;
	}
}

$obj = Connection::check_connection();

?>
