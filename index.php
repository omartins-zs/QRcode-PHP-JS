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
    <title>Listagem de links</title>

    <!-- Script da Biblioteca QrCode -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
        integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div>
        <h1>Listagem de links com QrCode</h1>
        <?php 
        foreach ($result as $value) {
            ?>
        <div class="links display">
            <div>
                <span><?php echo $value['description']?></span>
                <p><?php echo $value['link']?></p>
            </div>
            <div id="qrcode<?php echo$value['id']?>">

            </div>
        </div>
        <!-- Criar QrCode através de um objeto do QrCode JS -->
        <script>
        // 1° Paramentro que cria o QrCode | 2° Param o link que sera codificado
        var qrc = new QRCode(document.getElementById('qrcode', ''))
        </script>
        </php } ?>
    </div>
</body>

</html>