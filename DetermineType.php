<?php
/**
 * Created by PhpStorm.
 * User: dee
 * Date: 2019-03-04
 * Time: 20:57
 */
define('CHECK_CONSTANT','Yes am a constant');
$intVar =1234;
$stringVar= "im a string";
$boolVar =false;
$floatVar =12.34;

//check int
echo is_int($intVar);
// 1 is equal === true
echo is_string($stringVar);

echo  is_bool($boolVar);

echo is_float($floatVar);

//check if constant is defined
echo defined('CHECK_CONSTANT');
