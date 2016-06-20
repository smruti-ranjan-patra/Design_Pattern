<?php

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Book
{
	public $title;
	public $author;

	/**
	* Constructor to assign the book title and author name
	*
	* @access public
	* @param  string $title_name, string $author_name
	* @return void
	*/
	public function __construct($title_name, $author_name)
	{
		$this->title = $title_name;
		$this->author = $author_name;
	}

	/**
	* To print the book title
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function get_title()
	{
		echo $this->title . "<br>";
	}

	/**
	* To print the book author
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function get_author()
	{
		echo $this->author . "<br>";
	}
}

/**
* Super Class
*
* @author Smruti Ranjan
*/
class Extended_book
{
	private $title;
	private $author;

	/**
	* Constructor to assign the book title and author name
	*
	* @access public
	* @param  object $book
	* @return void
	*/
	public function __construct($book)
	{
		$this->title = $book->title;
		$this->author = $book->author;
	}

	/**
	* To display both title and author of the book
	*
	* @access public
	* @param  void
	* @return void
	*/
	public function get_title_and_author()
	{
		echo "Title - " . $this->title . "<br>";
		echo "Author - " . $this->author . "<br>";
	}
}

$book1 = new Book('Harry Potter', 'J.K. Rowling');
$extended_book1 = new Extended_book($book1);
$extended_book1->get_title_and_author();
?>