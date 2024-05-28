<?php
// Retorno: Nome "Apelido" Sobrenome
$nom = "Rodrigo";
$snom = "Nogueira";
// echo "$nom "Minotauro" $snom"; 
// Dessa forma código dá erro, porque interpreta que a primeira aspa de "Minotauro" está fechando a de $nom
echo '$nom "Minotauro" $snom'.PHP_EOL;
echo "$nom \"Minotauro\" $snom".PHP_EOL;
// \" Sequência de escape

/**
 * Sequências de escape para double quoted (aspas duplas)
 * \n - Nova linha
 * \t - Tabulação horizontal
 * \\ - Barra invertida
 * \$ - Sinal de cifrão
 * \u{} - Codepoint Unicode
 */

$nome = "Vinícius";
$sobrenome = "Moreira";
$apelido = "vinicius7m";

// echo "$nome "$apelido" $sobrenome".PHP_EOL;
echo "$nome ".$apelido." $sobrenome".PHP_EOL;
echo "$nome \"$apelido\" $sobrenome".PHP_EOL;
echo '$nome \'$apelido\' $sobrenome'.PHP_EOL;
echo "$nome \t\t \"$apelido\" \t\t $sobrenome".PHP_EOL;
echo "$nome \n\t \"$apelido\" \t\t $sobrenome".PHP_EOL;