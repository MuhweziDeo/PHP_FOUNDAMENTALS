<?php

/**
 * 
 */
class Person
{
	// constant
	const AVG_LIFE_SPAN=75;
// public can be accessed anywhere

 public $firstName;
 public $lastName;	
 public $age;

 // constructor runs automatic
	function __construct($tempFirstName="",$tempLast="",$tempAge=""){
		// can set default params
		// runs always
		$this->firstName=$tempFirstName;
		$this->lastName=$tempLast;
		$this->age=tempAge;


	}

 // functions inside a class are 
 // called methods
 public function getFirstName(){

 	return $this->firstName;

 }

 public function setFirstName($tempName){
 	$this->firstName=$tempName;

 }
	
}

$newPerson = new Person('deee','sente', 34);

echo  $newPerson -> firstName."\n";

$newPerson->firstName="deo256";

echo  $newPerson -> firstName;

// accessing constants in a class 

echo $newPerson::AVG_LIFE_SPAN;

echo Person::AVG_LIFE_SPAN;

// creating methods
$newPerson->setFirstName('muhwezi');
echo  $newPerson->firstName;

?>