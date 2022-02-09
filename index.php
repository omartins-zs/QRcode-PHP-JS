<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=QrCodePhpJs", "root", "");
    echo "Conectado ao Banco de dados....";
} catch (PDOException $e) {
    echo $e->getMessage();
}