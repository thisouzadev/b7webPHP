<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sakila";
// try {
//    $conn = new PDO("mysql:host=$servername;dbname=sakila", $username, $password, $db);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//    }
// catch(PDOException $e)
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }



// $con = mysqli_connect("192.168.64.2","userbob","Pass2bob!","test_db", 3306);
// if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }


$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

echo "TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo'<prev>';
print_r($dados);

// echo'thiago';