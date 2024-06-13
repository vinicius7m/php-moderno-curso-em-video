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
        $dividend = $_GET['dividend'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="dividend" id="dividend" step="0.01" value="<?=$dividend?>">

            <label for="v2">Divisor</label>
            <input type="number" name="divisor" id="divisor" step="0.01" value="<?=$divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Anatomia da divisão</h2>
        <?php
            $quotient = intdiv($dividend, $divisor);
            $rest = $dividend % $divisor;
            echo "<ul>
                <li>Dividendo: $dividend</li>
                <li>Divisor: $divisor</li>
                <li>Quociente: $quotient</li>
                <li>Resto: $rest</li>
            </ul>";
            ?>
    </section>
</body>
</html>