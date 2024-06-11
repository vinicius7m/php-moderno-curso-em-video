<?php
    $money = $_GET['money'];

    $actualDate = new DateTime('today');
    $formattedDate = $actualDate->format('m-d-Y');

    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$formattedDate'&@dataFinalCotacao='$formattedDate'&\$format=json";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erro na requisição: ' . curl_error($ch);
    } else {
        $data = json_decode($response, true);
        
        if (isset($data['value']) && !empty($data['value'])) {
            $currencyTax = 0;
            foreach ($data['value'] as $cotacao) {
                $currencyTax = $cotacao['cotacaoCompra'];
            }
        } else {
            echo "Nenhuma cotação encontrada para a data $formattedDate.\n";
        }
    }

    curl_close($ch);

    $moneyConverted = $money / $currencyTax;
    $moneyConverted = number_format($moneyConverted, 2, ",");
    $currencyTax = number_format($currencyTax, 2, ",");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <p><?php echo "Seu dinheiro convertido a dólar fica: <strong>R$ $money</strong> - <strong>$ $moneyConverted</strong>"; ?></p>
        <p><?php echo "Cotação atual - R$ $currencyTax" ?></p>
    </section>
</body>
</html>

