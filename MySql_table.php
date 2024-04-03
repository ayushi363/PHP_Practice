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

//create table in database
$sql= " CREATE TABLE `ouremployees` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `role` VARCHAR(15) NOT NULL , `doj` DATETIME(4) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

//Check for the table creation success
if($result){
    echo "<br>table created successfully";
} else{
    echo "<br>table creation failed because of this error --->" .mysqli_error($conn);
}



?>