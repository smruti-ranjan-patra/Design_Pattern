<?php

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Book
{
	// Data mambers
	public $topic = '';

	/**
	* To set the topic name
	*
	* @access public
	* @param  string $topic_name
	* @return void
	*/
	public function set_topic($topic_name)
	{
		$this->topic = $topic_name;
	}

	/**
	* To display the topic name
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function get_topic()
	{
		echo $this->topic . "<br>";
	}

	/**
	* To make cloning possible
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function __clone()
	{

	}
}
echo "book1 object<br>";
$book1 = new Book();
$book1->set_topic('Hello');
$book1->get_topic();
print_r($book1);
echo "<br>";
echo "<br>";

echo "book2 object<br>";
$book2 = $book1;
$book2->set_topic('Bye');
$book2->get_topic();
print_r($book2);
echo "<br>";
echo "<br>";

echo "book3 object<br>";
$book3 = clone $book1;
$book3->set_topic('MFSI');
$book3->get_topic();
print_r($book3);
echo "<br>";
echo "<br>";

var_dump($book1);
echo "<br>";
var_dump($book2);
echo "<br>";
var_dump($book3);
echo "<br>";


?>