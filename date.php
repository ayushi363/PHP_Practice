<?php
// welcome to inbuilt function date
// l for thursday(day)
//d for date like 01
// j for date like 1
// D for Thu day
// S for th , rd
// F for Month 
// Y for year - 2024
// y for year - 24
// A for AM or PM
$d = date("dS  F  Y");
echo "Today date is $d <br>";

// Print time
date_default_timezone_set('Asia/Kolkata');

$d = date('H:i:s A');
echo "Current Time is $d <br>";

$year = date('Y');
echo " <br>";
echo "Copyright $year | All Rights Reserved<br>";

?>