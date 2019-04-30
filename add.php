<?php

$n = $_GET['name'];
$p = $_GET['lastname'];


$db= new PDO("mysql:host=localhost;dbname=youcode;charset=UTF8","root","");

$sql = "INSERT INTO students VALUES(NULL,?,?)";

$stmt = $db->prepare($sql);

$stmt -> bindValue(1,$n, PDO::PARAM_STR);
$stmt -> bindValue(2,$p, PDO::PARAM_STR);


$stmt->execute();

header('location:index.php');