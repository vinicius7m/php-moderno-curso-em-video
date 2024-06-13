<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        $number = $_GET['number'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="number" id="number" step="0.01" value="<?=$number?>">
            </label>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $squareRoot = number_format(sqrt($number), 3, ',', '.');
            $cubicRoot = number_format(pow($number, 1/3), 3, ',', '.');

            echo "
            <ul>
                <li>A sua raiz quadrada é <strong>$squareRoot</strong></li>
                <li>A sua raiz cúbica é <strong>$cubicRoot</strong></li>
            </ul>
            ";
        ?>
    </section>
</body>
</html>