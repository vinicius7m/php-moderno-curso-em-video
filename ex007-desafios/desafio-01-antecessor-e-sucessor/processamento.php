<?php

$number = $_GET['number'];

$numberParsedInt = (int) ($number);

$values = getPredecessorAndSuccessor($numberParsedInt);

function getPredecessorAndSuccessor(int $number = 0): array
{
    return [
        "number" => $number,
        "predecessor" => $number - 1,
        "successor" => $number + 1
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Antecessor e sucessor</h1>
    </header>
    <main>
        <p><?php echo "O número que você enviou foi ".$values['number']; ?></p>
        <p><?php echo "O seu antecessor é ".$values['predecessor']; ?></p>
        <p><?php echo "E o seu sucessor é ".$values['successor']; ?></p>
    </main>
</body>
</html>