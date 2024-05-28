<?php

// Notação heredoc - multilinha - propriedade de aspas duplas 
$canal = "Curso em Vídeo";
$curso = "PHP";
$ano = date('Y');

echo <<< TESTE
    Estou estudando
        $curso em $ano
    Abraços! \u{1F596}
    TESTE.PHP_EOL;

// Notação nowdoc - multinha - propriedade de aspas simples
echo <<< 'TESTE'
    Estou estudando
        $curso em $ano
    Abraços! \u{1F596}
    TESTE.PHP_EOL;