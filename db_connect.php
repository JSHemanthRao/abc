<?php
include "variables.php";


$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts"; 

$connect = mysqli_connect($servername,$username,$password,$database);

if($connect){
    echo "Connection to the database is successful<br>";
}else{
    echo "Connection to the database was not sucessful<br>". mysqli_connect_error();
}
$sql = "CREATE TABLE trips (
    sno INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    dest VARCHAR(50) NOT NULL,
    dt DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (sno)
)";
$result = mysqli_query($connect,$sql);


if($result){
    echo "Table created successful<br>";
}else{
    echo "table was not created succesfully<br>";
}
?>