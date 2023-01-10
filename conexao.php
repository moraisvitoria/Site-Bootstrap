<?php
$host="localhost";
$user="root";
$pass="";
$idbname="academia1";
$port="3306";

try{
    $conn = new PDO("mysql:host=$host;port=$port;dbname" . $idbname, $user, $pass);
    echo "Conexão com banco de dados realizado com sucesso!";
}

catch(PDOException $error){
    echo "Error: Conexão com o banco de dados não realizada" . $error;
}