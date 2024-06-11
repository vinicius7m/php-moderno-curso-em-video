<?php
    $currencyTax = 5.20;
    $money = $_GET['money'];
    $moneyConverted = $money / $currencyTax;
    $moneyConverted = number_format($moneyConverted, 2, ",");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <p><?php echo "Seu dinheiro convertido a dólar fica: <strong>R$ $money</strong> - <strong>$ $moneyConverted</strong>"; ?></p>
    </section>
</body>
</html>