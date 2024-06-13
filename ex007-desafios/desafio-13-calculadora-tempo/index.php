<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        $time = $_GET['time'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="time">Qual é o total de segundos?</label>
            <input type="number" name="time" id="time" step="1" value="<?=$time?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php

            $secondsInMinute = 60;
            $secondsInHour = 60 * $secondsInMinute;
            $secondsInDay = 24 * $secondsInHour;
            $secondsInWeek = 7 * $secondsInDay;

            $weeks = intdiv($time, $secondsInWeek);
            $remainingSeconds = $time % $secondsInWeek;

            $days = intdiv($remainingSeconds, $secondsInDay);
            $remainingSeconds = $remainingSeconds % $secondsInDay;

            $hours = intdiv($remainingSeconds, $secondsInHour);
            $remainingSeconds = $remainingSeconds % $secondsInHour;

            $minutes = intdiv($remainingSeconds, $secondsInMinute);
            $seconds = $remainingSeconds % $secondsInMinute;

            echo "
                Analisando o valor que você digitou, <strong>$time</strong> equivalem a um total de:
                <ul>
                    <li>$weeks semanas</li>
                    <li>$days dias</li>
                    <li>$hours horas</li>
                    <li>$minutes minutos</li>
                    <li>$seconds segundos</li>
                </ul>
            ";
        ?>
    </section>
</body>
</html>