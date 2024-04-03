<?php

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

$sql = "SELECT * FROM `ouremployees`";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num = mysqli_num_rows($result);
echo "<br>";

echo $num;
echo " records found in database<br>";

//Display the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno']. ". Hello " .$row['name'];
        echo "<br>";
    }
}



?>