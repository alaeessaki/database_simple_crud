
<?php
try {
   $db= new PDO("mysql:host=localhost;dbname=youcode;charset=UTF8","root","");
   if ($db){
//    echo "connected successfully";

    }
}catch(PDOException $e){
    echo $e->getMessage();
}


$sql = "SELECT * FROM students";

$stmt = $db -> query($sql);
$rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r($rows);


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
<h1>Users</h1>
<br>
<form action="add.php">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="lastname" placeholder="lastname">
    <button>Envoyer</button>
</form>
<br>
<table border="1" width="100%">
    <tr><th>ID</th><th>NOM</th><th>EMAIL</th></tr>
    <?php foreach ($rows as $row):  ?>
        <tr>
            <td align="center"><?= $row['id'] ?></td>
            <td align="center"><?= $row['name'] ?></td>
            <td align="center"><?= $row['lastname'] ?></td>
            <td><a href="del.php?idd=<?= $row['id'] ?>">Supprimer</a></td>
            <td><a href="update.php?idd=<?= $row['id'] ?>">Modifier</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
