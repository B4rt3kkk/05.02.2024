<?php

    $server = "localhost";
    $port = 3306;
    $username = "root";
    $password = "";
    $bazadanych = "050320242CT";

    try{
        $polonczenie = new PDO('mysql:host='.$server.';
        dbname='.$bazadanych.';port='.$port.
        "charset=utf8",$username,$password);
        echo("<h3>Połączono z bazą danych</h3>");
    }catch(PDOExeption $e) {
        echo("<h3>Error połączenia z bazą danych.</h3>");
        die();
    }
?>