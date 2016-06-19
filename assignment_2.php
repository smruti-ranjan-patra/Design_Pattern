<?php
class Connection
{
	private static $conn = 0;
	private $host_name = null;
	private $user_name = null;
	private $password = null;
	private $db_name = null;
	private static $connection_obj = null;

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
		if(self::$connection_obj == null)
		{
			self::$connection_obj = new connection;
		}
		return self::$connection_obj;
	}
}
$obj = new Connection;
$obj = database::check_connection();

?>
