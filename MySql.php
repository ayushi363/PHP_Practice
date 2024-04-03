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



// Create a connection

$conn = mysqli_connect($servername, $username, $password);

//Die if connection failed
if (!$conn){
    die("Sorry we failed to connect :" .mysqli_connect_error());

}else{
echo "<br>Connection was Successful.";
}

//create database
$sql = "CREATE DATABASE ayushi";
$result = mysqli_query($conn, $sql);

//Check for the database creation success
if($result){
    echo "<br>Database created successfully";
} else{
    echo "<br>Database creation failed because of this error --->" .mysqli_error($conn);
}



?>