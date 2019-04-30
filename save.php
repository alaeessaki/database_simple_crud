<?php
$n = $_GET['name'];
$p = $_GET['lastname'];
$id= $_GET['idd'];


$db= new PDO("mysql:host=localhost;dbname=youcode;charset=UTF8","root","");

$sql = "UPDATE students SET name=:n, lastname=:l WHERE id=:i";


$stmt = $db->prepare($sql);

$stmt -> bindValue('n',$n, PDO::PARAM_STR);
$stmt -> bindValue('l',$p, PDO::PARAM_STR);
$stmt -> bindValue('i',$id, PDO::PARAM_INT);



$stmt->execute();

header('location:index.php');