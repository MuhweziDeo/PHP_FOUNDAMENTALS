<?php
/**
 * Created by PhpStorm.
 * User: dee
 * Date: 2019-03-04
 * Time: 21:09
 */
//basic function
function bookAuthor (){
    echo 'deee';
    echo 'agggr';
};

bookAuthor();
// function params
function bookByAuthor($authorName){
    echo $authorName;
}

bookByAuthor('Deee');
// function default params
function defaultParams($authorName, $age=22){
    echo "\n";
    echo $authorName;

    echo  $age;
};
defaultParams('muhwezi');

//return values

function getAuthor(){
    return "Dee muhwezi";
}

echo getAuthor();
