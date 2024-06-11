<?php

$actualDate = new DateTime('today');
$formattedDate = $actualDate->format('m-d-Y');

$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$formattedDate'&@dataFinalCotacao='$formattedDate'&\$format=json";

$dados = json_decode(file_get_contents($url), false);

print_r($dados);