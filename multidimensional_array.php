<?php

echo "Wecome to Multidimensional Arrays in PHP<br>";

// Creating two dimensional arrays
$multiDim = array(
    array(2,5,9,8,),
    array(5,6,1,8,),
    array(1,6,7,8,)
);
// echo var_dump($multiDim);

echo $multiDim[1][2];
echo "<br>";

// printing the content of two dimensional array
for ($i=0; $i < count($multiDim); $i++) { 
 echo var_dump($multiDim[$i]);
 echo "<br>";
}
// Print the values of 2D arrays
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
           echo $multiDim[$i][$j]. " ";   
         }
    
    echo "<br>";
   }


?>