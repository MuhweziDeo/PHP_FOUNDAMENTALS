<?php

/**
 * 
 */
class Person
{
	// constant
	const AVG_LIFE_SPAN=75;
// public can be accessed anywhere

 protected $firstName;
 protected $lastName;	
 protected $age;

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
	
};

class Author extends Person {
    // you can only access protected methods inside the class
	protected $penName = "mr me";

	protected function getPenName()
	{
		return $this->penName.PHP_EOL;
	}
	public function getCompleteName()
	{
		return $this->firstName." ".$this->lastName." aka ".$this->penName>PHP_EOL;

	}
};


$newAuthor = new Author('ddd','aaaa',34);
echo $newAuthor->penName;


?>