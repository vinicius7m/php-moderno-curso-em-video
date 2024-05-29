<?php

$result = abs(-2000); // números absolutos sem sinal negativo
$result = base_convert(254, 10, 8); // converter bases, no exemplo transformar 254 da base 10 para 8
print("A resposta é $result".PHP_EOL);

/**
 * ceil() - arredonda pra cima
 * floor() - arredonda pra baixo
 * round() - arredonda aritmeticamente
 */

/**
 * hypot() - cálculo da hipotenusa
 */

/**
 * intdiv() - divisão inteira
 * 
 */

$realDivision = 5/2;
$integerDivision = intdiv(5,2);

print("$realDivision $integerDivision".PHP_EOL);

/**
 * min() - menor valor
 * max() - maior valor
 */

print(min(8,7,2,9,5,4,3,9,67,8,7).PHP_EOL);
print(max(8,7,2,9,5,4,3,9,67,8,7).PHP_EOL);

// PI
$valuePiWithMethod = pi();
$valuePiWithConstant = M_PI;

print("$valuePiWithMethod $valuePiWithConstant".PHP_EOL);

// Potenciação
$result = 5 ** 2;
$power = pow(5,2); // perde a ordem de precedência
print("$power $result".PHP_EOL);

/**
 * sin()
 * cos()
 * tan()
 * sqrt() - raiz quadrada
 */

$result = sqrt(81);
$resultSqrtWithoutMethod = 81 ** (1/2);
print("$resultSqrtWithoutMethod $result".PHP_EOL);

// Como resolver raiz cúbica?
$result = 27 ** (1/3);
print($result.PHP_EOL);