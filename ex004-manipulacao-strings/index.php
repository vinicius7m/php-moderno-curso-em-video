<?php

/**
 * Formatos de strings
 * double quoted - "Curso" e interpreta o conteúdo
 * single quoted - 'Curso' e não interpreta o conteúdo
 * heredoc
 * nowdoc
 */

print("PHP \u{1F418}" . PHP_EOL); // Retorna o emoji
print('PHP \u{1F418}' . PHP_EOL); // Não retorna o emoji

$nome = "Gustavo";
echo "Olá $nome!".PHP_EOL;
echo 'Olá $nome!'.PHP_EOL;

$nome = "Vinícius";
$sobrenome = "Moreira";
echo "$nome $sobrenome \u{1F596}".PHP_EOL;
echo '$nome $sobrenome \u{1F596}'.PHP_EOL;

// Variáveis com dados armazenados com aspas simples (single quoeted) e retornando com aspas duplas (double quoted)
$nome = 'Vinícius';
$sobrenomeComEmoji = 'Moreira \u{1F596}';
echo "$nome $sobrenomeComEmoji".PHP_EOL;

// Usando constantes

const ESTADO = "CE";
echo "Moro no ESTADO".PHP_EOL;
echo "Moro no ESTADO".PHP_EOL;
echo "Moro no ".ESTADO.PHP_EOL;

const CANAL = "Curso em Vídeo \u{1F499}";
const CANAL_COM_ASPAS_SIMPLES = 'Curso em Vídeo \u{1F499}';
echo "Eu adoro o ".CANAL.PHP_EOL;
echo "Eu adoro o ".CANAL_COM_ASPAS_SIMPLES.PHP_EOL;

// Manipulação de data

echo "Estamos no ano de date('Y')".PHP_EOL; // Retorna date('Y')
echo "Estamos no ano de ".date('Y').PHP_EOL;

/**
 * Operador de concatenação é o "." (ponto) 
 */