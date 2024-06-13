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
        $minSalary = 1412;
        $salary = $_GET['salary'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Salário</label>
            <input type="number" name="salary" id="salary" step="0.01" value="<?=$salary?>">
            <label>Considerando que o salário mínimo atual é R$ 
                <strong>
                    <?php 
                        $minSalaryShow = number_format($minSalary, 2, ',', '.');
                        echo $minSalaryShow; 
                    ?>
                </strong>
            </label>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $relativeQuantitySalaries = intdiv($salary, $minSalary);
            $moduleSalaries = $salary % $minSalary;

            $salary = number_format($salary, 2, ',', '.');
            $moduleSalaries = number_format($moduleSalaries, 2, ',', '.');


            echo "Quem recebe um salário de $salary ganha <strong>$relativeQuantitySalaries salário(s) minimo(s)</strong> + R$ $moduleSalaries";    
        ?>
    </section>
</body>
</html>