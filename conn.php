<?php

//DB CONNECT

$hostname = 'localhost';
$username = 'todos';
$password = '87654321';
$database = 'library';

$conn= mysqli_connect(
    $hostname,
    $username,
    $password,
    $database
);

if(!$conn){
    echo"Failed";
}

?>