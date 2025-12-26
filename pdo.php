<?php

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sql = $conn->prepare("SELECT * FROM students");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result)) {
    foreach ($result as $row) {
        echo $row;
        echo "<br>";
    }
}
