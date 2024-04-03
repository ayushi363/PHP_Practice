<?php
// variables are containers for storing information
// starts with $
// variables are case sensitive in php
// do not need to mention data type 
// cannot start with a number
// must start with a letter or underscore
// can only contain alphanumeric characters and underscores
$name= "Ayushi";
$income = 200; // global variable

echo "This is $name and her income is $income <br>";

// Scope of variables

echo "Welcome to scope and local/global variables in PHP<br>";

function printValue(){
    $a = 7; // local variable
    global $income; //wants access to variables
    $income = 300;
    echo "The vaue is $income <br>";
}


printValue();

echo $income. "<br>";

echo var_dump($GLOBALS);// used to find all global variables
echo var_dump($GLOBALS["income"]);
?>


