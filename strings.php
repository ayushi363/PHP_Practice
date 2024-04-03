<?php
//Strings Functions in PHP
$name = "Ayushi is a Web Developer";
echo $name;
echo "<br>";
// string length = strlen();
echo "The length of this string is " .strlen($name);
echo "<br>";
// Count Words
echo "The total words are ".str_word_count($name);
echo "<br>";
// reverse the string
echo strrev($name);
echo "<br>";
// search something in string - return starting index of someting
echo "start Index number of is ".strpos($name,"is");
echo "<br>";
// replace something
echo str_replace("Ayushi","Aisha",$name);
// reapeat a string
echo "<br>";
echo str_repeat($name,5);
echo "<br>";
// pre is used to print as it is
echo "<pre>";
// trim from right
echo rtrim("    this is a good thing   ");
echo "<br>";
// trim from left
echo ltrim("    this is a good thing   ");
echo "<br>";
// trim from both side
echo trim("    this is a good thing   ");

echo "</pre>";

?>