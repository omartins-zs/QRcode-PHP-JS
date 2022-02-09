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