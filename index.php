<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=QrCodePhpJs", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM links");
$stmt->execute();
// O Return da consulta dos dados será em um array associativo
$result = $stmt->fetchAll();
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>