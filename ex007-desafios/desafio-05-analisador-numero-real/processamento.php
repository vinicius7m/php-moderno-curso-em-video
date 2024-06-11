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
        <h1>Analisador de número real</h1>
        <?php
            $realNumber = $_GET['real_number'];

            if(is_numeric($realNumber)) {
                $numberSplited = explode('.', $realNumber);
                $realNumber = number_format($realNumber, 2, ".",",");

                $integerNumber = number_format($numberSplited[0], 0, ".",",") ?? 0;
                $decimalNumber = $numberSplited[1] ?? 0;
                echo "
                <p>Analisando o número <strong>$realNumber</strong> informado pelo usuário:</p>
                <li>
                    A parte inteira é <strong>$integerNumber</strong>
                </li>
                <li>
                    A parte decimal é <strong>$decimalNumber</strong>
                </li>";
            } else {
                echo "<p> foi possível pois não é conjunto numérico</p>";
            }

        ?>
    </section>
</body>
</html>
