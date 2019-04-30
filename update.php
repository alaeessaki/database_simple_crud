<?php
$id = $_GET['idd'];

$db= new PDO("mysql:host=localhost;dbname=youcode;charset=UTF8","root","");

$sql = "SELECT * FROM students WHERE id=?";

$stmt = $db->prepare($sql);

$stmt -> bindValue(1,$id, PDO::PARAM_INT);

$stmt->execute();

$row =$stmt->fetch(PDO::FETCH_OBJ);

if(!$row){
    header("location:index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="save.php">
    <input type="hidden" name="idd" value="<?= $id?>">
    <input type="text" name="name" placeholder="name" value="<?=$row->name?>"><br>
    <input type="text" name="lastname" placeholder="lastname" value="<?=$row->lastname?>"><br>
    <button>Energiser</button>
</form>
</body>
</html>
