<?php

$servername = "localhost";
$username = "peter";
$password = "peejay2001@";
$db = "login";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
    die ("Connection not mane");
}else{
    echo "Connected!";
}

?>