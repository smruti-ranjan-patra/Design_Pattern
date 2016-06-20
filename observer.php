<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Database_operation
{
	// Data members
	public $transaction_type = '';

	/**
	* Edit contents
	*
	* @access public
	* @param  integer $id, string $column_name, string $value
	* @return void
	*/
	public function edit($id, $column_name, $value)
	{
		$log_obj = new Log();
		$log_obj->id = $id;
		$log_obj->column_name = $column_name;
		$log_obj->new_value = $value;
		$log_obj->type = 'edit';
		$log_obj->display_log();
	}

	/**
	* Insert contents
	*
	* @access public
	* @param  integer $id, string $column_name, string $value
	* @return void
	*/
	public function insert($id, $column_name, $value)
	{
		$log_obj = new Log();
		$log_obj->id = $id;
		$log_obj->column_name = $column_name;
		$log_obj->new_value = $value;
		$log_obj->type = 'insert';
		$log_obj->display_log();
	}

	/**
	* Delete contents
	*
	* @access public
	* @param  integer $id
	* @return void
	*/
	public function delete($id)
	{
		$log_obj = new Log();
		$log_obj->id = $id;
		$log_obj->type = 'delete';
		$log_obj->display_log();
	}
}

class Log
{
	// Data members
	public $type = '';
	public $id = '';
	public $column_name = '';
	public $new_value = '';

	/**
	* Display log
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function display_log()
	{
		echo "Transaction type = " . "$this->type" . "<br>";
		echo "ID = " . "$this->id" . "<br>";
		if(!empty($this->column_name))
		{
			echo "Column = " . "$this->column_name" . "<br>";
		}
		if(!empty($new_value))
		{
			echo "New value = " . "$this->new_value" . "<br>";
		}
	}
}

$obj = new Database_operation();
$obj->edit(1, 'name', 'Smruti');
echo "<br>";
$obj->delete(1);

?>