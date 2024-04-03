<?php
// Functions in PHP

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rohan = [34,52,65,45,56];
$sumMarks = processMarks($rohan);
echo "Total marks of rohan is :  $sumMarks <br>";

$Soha = [84,92,95,85,56];
$sumMarks = processMarks($Soha);
echo "Total marks of Soha is :  $sumMarks";
?>