<?php
// learn for each loop

$arr = array("banana","apple","bread","soap");
//using for loop print array values

for ($i=0; $i < count($arr) ; $i++) { 
    echo $arr[$i];
    echo "<br>";
}

// better way to print array values using foreach loop

foreach($arr as $value){
    echo "$value <br>";
}

?>