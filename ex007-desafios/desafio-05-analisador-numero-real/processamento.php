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

                $integerNumber = number_format($numberSplited[0], 0, ".",",") ?? 0;
                $decimalNumber = $numberSplited[1] ?? 0;
                echo "<p>A parte inteira é <strong>$integerNumber</strong></p><p>A parte decimal é <strong>$decimalNumber</strong></p>";
            } else {
                echo "<p> foi possível pois não é conjunto numérico</p>";
            }

        ?>
    </section>
</body>
</html>
