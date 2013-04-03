<?php

$hostname = $_SERVER['DB1_HOST'];
$database = $_SERVER['DB1_NAME'];
$username = $_SERVER['DB1_USER'];
$password = $_SERVER['DB1_PASS'];

$mysqli = new mysqli($hostname, $username, $password, $database);
 
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
 
$sql = file_get_contents('mysql-schema.sql');
if (!$sql){
	die ('Error opening file');
}

mysql_multi_query($mysqli, $sql);


$mysqli->close();
?>