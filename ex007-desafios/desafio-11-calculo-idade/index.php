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
        $birthYear = $_GET['birth_year'] ?? 0;
        $requestedYear = $_GET['requested_year'] ?? 0;

        $actualYear = date('Y');
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="birth_year">Em que ano você nasceu?</label>
            <input type="number" name="birth_year" id="birth_year" step="0.01" value="<?=$birthYear?>">
            
            <label for="requested_year">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$actualYear?></strong>)</label>
            <input type="number" name="requested_year" id="requested_year" step="0.01" value="<?=$requestedYear?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $age = $requestedYear - $birthYear; 
            if($age >= 0) { 
                echo "Quem nasceu em $birthYear vai ter <strong>$age</strong> em $requestedYear!";
            } else {
                echo "Não foi possível, data de nascimento precisa ser menor que o ano requisitado";
            }
        ?>
    </section>
</body>
</html>