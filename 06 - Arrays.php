<?php


//Vetor
$frutas = array("laranja", "acerola", "cereja", "limao");
print_r($frutas);


//Array
$carros[0][0] = "GM";
$carros[0][1] = "Cabal";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$caros [1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo "<br><br>";
echo $carros[0][3];

echo "<br><br>";
echo end($carros[1]);

$pessoas = array();
array_push($pessoas, array('nome'=>'João',
'idade'=>20));
array_push($pessoas, array('nome'=>'Luiz',
'idade'=>25));

echo "<br><br>";
print_r($pessoas);


//JSOM
echo "<br><br>";

$usuarios = array();
array_push($usuarios, array('nome'=>'João',
'idade'=>20));
array_push($usuarios, array('nome'=>'Luiz',
'idade'=>25));

echo json_encode($usuarios);

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Luiz","idade":25}]';

$data = json_decode($json, true);
var_dump($data);

////////////////////////////////////////////////////////////
echo "<br><br>";

define("SERVIDOR","127.0.0.1");
echo SERVIDOR;

///////////////////////////////////////////////////////
define("Bando_De_Dados",[
'127.0.0.1','root','password', 'test']);

echo "<br><br>";
print_r(Bando_De_Dados);

///////////////////////////////////////////////////////

echo "<br><br>";
echo PHP_VERSION;

?>