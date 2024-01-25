<?php

require ("conn.php");

$sql = "INSERT INTO log(user_id, username, password, email) VALUES(1, 'mark', '123456', 'janedoe@gmail.com');";

if($conn -> query($sql) === true){
    echo "New record created";
}else{
    echo "Error: ".$sql."<br>".$conn -> error;
}

$conn -> close();

?>