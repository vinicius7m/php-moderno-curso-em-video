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
        $price = $_GET['price'] ?? 0;
        $percent = $_GET['percent'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="price">Preço do Produto (<strong>kg</strong>)</label>
            <input type="number" name="price" id="price" step="0.01" value="<?=$price?>">
            
            <label for="percent">Qual será o percentual de reajuste? (<strong><span id="value"></span>%</strong>)</label>
            <input type="range" name="percent" id="percent" step="1" min="0" max="100" value="<?=$percent?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            $readjustment = $price * ($percent / 100);
            $newPrice = $price + $readjustment;
            $newPrice = number_format($newPrice, 2, ',', '.');
            $price = number_format($price, 2, ',', '.');
            print("O produto que custava <strong>$price</strong>, com <strong>$percent de aumento</strong> vai passar a custar <strong>$newPrice</strong> a partir de agora");
        ?>
    </section>

    <script type="text/javascript" src="script-input-range.js"></script>
</body>
</html>