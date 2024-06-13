<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');

                setcookie("dia-da-semana", strftime('%A', strtotime('today')), time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou";

                echo "<h1>Superglobal GET</h1>"; // Pega os dados pela URL
                var_dump($_GET);
                // Query String ?attribute=value

                echo "<h1>Superglobal POST</h1>"; // Pega apenas os dados do cabeçalho da requisição
                var_dump($_POST);
                
                echo "<h1>Superglobal REQUEST</h1>"; // Capta os dados de GET e POST
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);

                /**
                 * Outros exemplos de Superglobais
                 * $_COOKIE: acessa os cookies da sua aplicação
                 * $_FILES: consegue ter acesso aos dados de arquivos em processo de upload
                 * $_SESSION: reserva as variáveis de sessão (não se perde na navegação de uma página para outra)
                 * $_ENV: variáveis de ambiente
                 * $_SERVER: dados do servidor
                 * $GLOBALS: pega o conteúdo de todas as outras superglobais
                 */
            ?>
        </pre>
    </main>
</body>
</html>