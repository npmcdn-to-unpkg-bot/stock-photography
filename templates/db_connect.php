<?php
$host = "localhost";
$db_name = "amn_stocker";
$username = "amn_stocker";
$password = "Token2016";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>