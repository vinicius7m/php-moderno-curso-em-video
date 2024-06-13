<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média aritmética</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $value1 = $_GET['value1'] ?? 0;
        $value2 = $_GET['value2'] ?? 0;
        $weight1 = $_GET['weight1'] ?? 0;
        $weight2 = $_GET['weight2'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="value1">Valor 1</label>
            <input type="number" name="value1" id="value1" step="0.01" value="<?=$value1?>">
            
            <label for="v1">Valor 2</label>
            <input type="number" name="value2" id="value2" step="0.01" value="<?=$value2?>">
            
            <label for="v1">Peso 1</label>
            <input type="number" name="weight1" id="weight1" step="0.01" value="<?=$weight1?>">

            <label for="v1">Peso 2</label>
            <input type="number" name="weight2" id="weight2" step="0.01" value="<?=$weight2?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $arithmeticAverage = ($value1 + $value2) / 2;
            $weightedAverage = (($value1 * $weight1 ) + ($value2 * $weight2)) / ($weight1 + $weight2);

            $arithmeticAverage = number_format($arithmeticAverage, 3, ',', '.');
            $weightedAverage = number_format($weightedAverage, 3, ',', '.');

            echo "
                <p>Analisando os valores $value1 e $value2</p>
                <ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>$arithmeticAverage</strong></li>
                    <li>A <strong>Média Ponderada</strong> entre os valores é igual a <strong>$weightedAverage</strong></li>
                </ul>
            ";
        ?>
    </section>
</body>
</html>