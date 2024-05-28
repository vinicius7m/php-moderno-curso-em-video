<?php

/**
 * Variáveis variam de valor
 * Contantes mantém o valor
 */


/**
 * 
 * Regras para nomes identificadores
 * 
 * 1- Variáveis sempre começam com o simbolo $
 * 2- O segundo pode ser letra ou símbolo _ (underline)
 * 3- Aceita caracteres [a-z], [A-Z], [0-9] e [_]
 * 4- Aceita caracteres da tabela ASCII a partir de 128
 * 5- Aceita caracteres acentuados como á, ô, ç
 * 6- A linguagem é case sensitive em relação aos nomes
 * 7- Nomes especiais (reservados) como $this não podem ser usados
 *    
 */

$nome = "Gustavo";
$sobrenome = "Guanabara";
const PAIS = "Brasil";

$idade = 43;
$peso = 118.5;
$casado = false;

const CURSO = "TI";


$nome = "Rafael";
$sobrenome = "Silva";

echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . PHP_EOL;