<?php

/**
 * 
 */
class Person
{
	// constant
	const AVG_LIFE_SPAN=75;
// public can be accessed anywhere

// private are treated like undefined variables in inheriated class
 private $firstName;
 private $lastName;	
 private $age;

 // constructor runs automatic
	function __construct($tempFirstName="",$tempLast="",$tempAge=""){
		// can set default params
		// runs always
		echo "constructor";
		$this->firstName=$tempFirstName;
		$this->lastName=$tempLast;
		$this->age=tempAge;
	}

 // functions inside a class are 

 // called methods
 public function getFirstName(){

 	return $this->firstName.PHP_EOL;

 }

 public function setFirstName($tempName){
 	return $this->firstName=$tempName;

 }
 protected function getFullName(){
 	echo "getFullName".PHP_EOL;
 	return $this->firstName." ".$this->lastName;
 }

 $var="dee ${getFullName()}";
	
};

class Author extends Person {
	// static only depend on other static properties and methods
	public static $centuryPopular="19th";

	public static function  getCenturyPopular()
	{
			return self::$centuryPopular;

	}
	private $penName = "mr me";

	protected function getPenName()
	{
		return $this->penName.PHP_EOL;
	}
	public function getCompleteName()
	{
		return $this->getFullName()." ".$this->lastName." aka ".$this->penName>PHP_EOL;

	}
};

// accessing static property
// echo Author::$centuryPopular;
echo Author::getCenturyPopular();

$newAuthor = new Author('ddd','aaaa',34);
//echo $newAuthor->getFullName();


?>