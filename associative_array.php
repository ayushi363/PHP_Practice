<?php
// Associative array means key value pairs
echo "Welcome to Associative array in PHP<br>";

$favcol = array(
    'Shubham' => 'red',
    'shivam' => 'green',
    'soham' => 'yellow'
);

foreach ($favcol as $key => $value) {
echo "<br> Favorite Color of $key is $value";
}

 echo "<br>";
echo $favcol['Shubham'];



?>