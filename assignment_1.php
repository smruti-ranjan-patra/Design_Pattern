<?php

class create_connection
{
	private $host_name = 'localhost';
	private $user_name = 'root';
	private $password = 'mindfire';
	private $db_name = 'registration';
	private $conn = '';

	function __construct()
	{
		$this->conn = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->db_name);

		if (mysqli_connect_errno())
		{
			echo "Connection failed: " . mysqli_connect_error();
		}

		return $this->conn;
	}
}
$obj = new create_connection();
?>