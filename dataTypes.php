<?php

/*
PHP Data Types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/ 

//Strings - Sequence of characters

$name= "ayushi";
$friend = "aisha";

echo "$name and $friend are best friends";

// Integer - Non Decimal Number

$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo $debts;

//Float - Decimal Point Number

$income = 344.5;
$debts = -45.5;
echo "<br>";
echo $income;
echo $debts;

// Boolean - can be either true or false

$num = true;
echo "<br>";
var_dump($num);

//Object - instance of a class
// Employee is a class ---> harry can be a object

// Array - Used to store multiple values in single variable
echo "<br>";
$friends = array("rohan","aisha", "akash", "shivam","larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];

//NULL
$name = NULL;
echo "<br>";
echo var_dump($name);
?>