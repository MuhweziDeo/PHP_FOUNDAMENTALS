<?php 
$dee = array('name' =>'dee' , 'age'=>23 );

echo $dee;

$authors = array("dee","deo","aggrey");

print_r($authors);


$authors = ['dee','deo','aggrey'];

print_r($authors);

// associative arrays
$authors = array(
'name' =>'dee',
'age'=>24,
'sex'=>'male'
);

print_r($authors);

 // access the values by key
echo $authors['name'];

 // array key exists
// returns true or flase
echo array_key_exists('age', $authors);

// find if value is inside an array
 echo in_array('male', $authors);

 // array push
 $authors = array("dee","deo","aggrey");

 array_push($authors, 'var');

 $authors[] = "robust";

 print_r($authors);

 // array pop
 $lastValue = array_pop($authors);
 echo($lastValue);

 // unset
unset($authors[1]);
print_r($authors);

// sort array
sort($authors);
// sorting an assocaitive array key is replaced with numbers
ksort($authors);
asort($authors);
print_r($authors);


// array count 
print(count(
$authors));

// for each loop
$dee = array('name' =>'dee' , 'age'=>23 );
foreach($dee as $key => $val){
	echo $val;
	echo($key);
}



?>