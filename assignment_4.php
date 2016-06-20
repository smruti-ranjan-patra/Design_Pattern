<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Mailer
{
	/* Member variables */
	private $email_list = array();


	/**
	* Add email id to email list
	*
	* @access public
	* @param  string $email_id
	* @return void
	*/
	public function add_email_id($email_id)
	{
		if ((array_search($email_id, $this->email_list)) == TRUE)
		{
			echo 'Email id - ' . $email_id . ' already present. ';
		}
		else
		{
			array_push($this->emails, $email_id);
			echo 'new email_id - ' . $email_id . ' added. ';
		}
	}

	/**
	* Delete email id form email list
	*
	* @access public
	* @param  string $email_id
	* @return void
	*/
	public function delete_email_id($email_id)
	{
		if (array_search($email_id, $this->email_list) == TRUE)
		{
			foreach($this->email_list as $key => $value)
			{
				if($value == $email_id)
				{
					unset($this->email_list[$key]);
					echo 'Email id - ' . $email_id . ' deleted. ';
				}
			}
		}
		else
		{
			echo 'Email id - ' . $email_id . ' not present. ';
		}
	}

	/**
	* Delete send mail.
	*
	* @access public
	* @param  string $message
	* @return void
	*/
	public function send_emails($message)
	{
		$watcher_obj = new Watcher();
		foreach ($this->email_list as $value)
		{
			$watcher_obj->send_to($value);
			$watcher_obj->add_msg($message);
		}
	}
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Watcher
{
	/* Member variables */
	public $msg = NULL;

	/**
	* Send msg
	*
	* @access public
	* @param  string $email_id
	* @return void
	*/
	public function add_msg($msg)
	{
		$this->msg=$msg;
	}

	/**
	* Send mail
	*
	* @access public
	* @param  string $email_id
	* @return void
	*/
	public function send_to($email_id)
	{
		echo 'Send mail ' . $this->msg . ' to ' . $email_id;
	}
}

$obj = new Mailer();
$obj->add_email_id('smruti@mfsi');
$obj->send_emails('Hello World');

?>