<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "testtdb";
    try{
        $conn = new PDO("mysql:host = $host; dbname = $dbname", $user, $pass);
    }catch(Exception $e){
        echo "error: ". $e->getMessage();
    }
?>