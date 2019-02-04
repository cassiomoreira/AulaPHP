<?php

$nome = "Cassio";

$sobrenome = 'Moreira';

var_dump($nome, $sobrenome);

echo "<br><br>"; 

$completo = $nome." ".$sobrenome;

echo "$completo Silva"; echo "<br>"; 

echo '$completo Silva'; echo "<br>"; 

echo "<br><br>";

/////////////////////////////////////////////////////////////////

//Funções de string
echo "<br>";
echo strtoupper($nome); //Tudo maiusculo;

echo "<br>";
echo strtolower($nome); //Tudo minusculo;

echo "<br>";
echo ucfirst($nome); //A primeira letra da frase

echo "<br>";
echo ucwords($nome); //A primeira letra de cada palavra

//Trocar a parte de uma string
echo "<br>";
$novoNome = str_replace("a", "@", $nome);

echo $novoNome;

echo "<br><br>";

$frase = "Hoje esta muito quente, amanha deve chover, como será o dia apos amanha?";
$res = strpos($frase, "quente"); //quantidade de caracteres até a palavra "quente"
$texto = substr($frase, 0, $res); // Copia da frase da posição 0 até a posição $res

var_dump($res, $texto); echo "<br><br>";

echo strlen($frase); // Número de caracteres da frase



?>