<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Aperte e gere um número de 1 a 100</h1>
    </header>
    <section>
        <?php
            $randomNumber = rand(1, 100);
        ?>
        <p>O valor gerado foi <?php echo $randomNumber; ?></p>
        <button type="button" onclick="window.location.reload()">↻ Gerar outro</button>
    </section>
</body>
</html>