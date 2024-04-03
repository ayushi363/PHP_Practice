<?php
//SQL- Structured Query Language
echo "Welcome to the stage where we are ready to get connected with database";

/*
Ways to connect to the MySQL Database
1. MySQLi Extension
i)  Procedural - use directly functions
ii) Object Oriented - use classes and objects
2.PDO - PHP  Data Objects
*/ 

// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$databse = "ayushi";


// Create a connection

$conn = mysqli_connect($servername, $username, $password, $databse);

//Die if connection failed
if (!$conn){
    die("Sorry we failed to connect :" .mysqli_connect_error());

}else{
echo "<br>Connection was Successful.";
}

$name = "Soha";
$work = "Clerk";
//SQL query to be executed
$sql= "INSERT INTO `ouremployees` ( `name`, `role`, `doj`) 
VALUES ('$name', '$work', '2024-03-08 13:18:00.000000')";
$result = mysqli_query($conn, $sql);

//Check for the table creation success
if($result){
    echo "<br>data inserted successfully";
} else{
    echo "<br>data insertion failed because of this error --->" .mysqli_error($conn);
}



?>