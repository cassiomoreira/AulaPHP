<?php

//Atribuição de string
$nome = "Cassio";
echo $nome; echo "<br><br>";

//Concatenação de string
echo $nome. " Moreira"; echo "<br><br>";

//concatenação  de string
echo $nome .= " Silva"; echo "<br><br>";

///////////////////////////////////////////////////////
//Operadores numericos.
$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

$valorTotal -= 10;

echo "Valor Total: ".$valorTotal; echo "<br><br>";

$valorTotal *= .9; 

echo "90% do valor total ".$valorTotal; echo "<br><br>";

////////////////////////////////////////////////////////////////

//Operadores aritmeticos

$a = 10;
$b = 2;

echo $a * $b; echo "<br>"; //Multiplicação
echo $a - $b; echo "<br>"; //Subtração
echo $a / $b; echo "<br>"; //divisão
echo $a + $b; echo "<br>"; //soma
echo $a ** $b; echo "<br>"; //exponenciação
echo $a % $b; echo "<br>"; //modulo


///////////////////////////////////////////////////////////////

//Operadores de comparação

var_dump($a < $b); echo "<br>";

var_dump($a > $b); echo "<br>";

var_dump($a <=> $b); echo "<br>"; // se $a for maior retorna(1)
                                  // se $a e $b forem iguais retorna(0)
                                  // se $b for maior retorna(-1)

var_dump($a = $b); echo "<br>"; //Atribuição

var_dump($a == $b); //Igualdade de valor 

var_dump($a === $b); //Igualdade de Tipo e valor

var_dump($a != $b); echo "<br>";

var_dump($a !== $b); echo "<br>";

$a = NULL;
unset($b);
$c = 34;
$d = 89;

echo $a ?? $b ?? $c; echo "<br><br>"; //Mostra apenas variáveis que existe e não são nulas. (E mostra apenas a primeira de uma lista de variáveis)

/////////////////////////////////////////////////////////////////

// Operadores incrementais.

$a = 10; echo $a."<br>"; 
$a++; echo $a."<br>"; 
++$a; echo $a."<br><br>";


/////////////////////////////////////////////////////////////////

//Operadores logicos
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;
echo "Valor: ".$resultado;


?>