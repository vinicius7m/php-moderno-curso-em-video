<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saque de dinheiro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        $money = $_GET['money'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="time">Quanto você deseja sacar? (<strong>R$</strong>)</label>
            <input type="number" name="money" id="money" step="1" value="<?=$money?>">

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php
       
            $money200 = intdiv($money, 200);
            $remainingMoney = $money % 200;

            $money100 = intdiv($remainingMoney, 100);
            $remainingMoney = $remainingMoney % 100;

            $money50 = intdiv($remainingMoney, 50);
            $remainingMoney = $remainingMoney % 50;

            $money20 = intdiv($remainingMoney, 20);
            $remainingMoney = $remainingMoney % 20;

            $money10 = intdiv($remainingMoney, 10);
            $remainingMoney = $remainingMoney % 10;

            $money5 = intdiv($remainingMoney, 5);
            $remainingMoney = $remainingMoney % 5;

            $money2 = intdiv($remainingMoney, 2);

            $moneyWithdraw = ($money200 * 200) +  ($money100 * 100) + ($money50 * 50) + ($money20 * 20) + ($money10 * 10) + ($money5 * 5) + ($money2 * 2);

            echo "
            <h2>Seque de R$ $moneyWithdraw realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
            <ul>
                <li>R$ 200 - $money200 x</li>
                <li>R$ 100 - $money100 x</li>
                <li>R$ 50 - $money50 x</li>
                <li>R$ 20 - $money20 x</li>
                <li>R$ 10 - $money10 x</li>
                <li>R$ 5 - $money5 x</li>
                <li>R$ 2 - $money2 x</li>  
            </ul>
            ";
            
        ?>
    </section>
</body>
</html>