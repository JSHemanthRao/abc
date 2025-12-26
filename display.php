<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

$connect = mysqli_connect($servername, $username, $password, $database);

if ($connect) {
    echo "Connection to the database is successful<br>";
} else {
    echo "Connection to the database was not sucessful<br>" . mysqli_connect_error();
}
$sql = "SELECT * FROM `details`";
$result = mysqli_query($connect,$sql);

echo mysqli_num_rows($result);
?>
