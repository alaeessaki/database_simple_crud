<?php
$id = $_GET['idd'];


$db= new PDO("mysql:host=localhost;dbname=youcode;charset=UTF8","root","");

$sql = "DELETE FROM students WHERE id=?";

$stmt = $db->prepare($sql);

$stmt -> bindValue(1,$id, PDO::PARAM_INT);

$stmt->execute();

header("location:index.php");