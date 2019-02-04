<?php
////////////////////////////////////////////////////////////////////
//VARIÁVEIS DO TIPO STRING
$nome = "cassio";

/*
Este é um bloco de 
texto, somente para 
exemplificar.
*/

//Mostrar o tipo de variável e seu conteudo.
var_dump($nome);

//pular linha
echo "<br/>";

//Mostar o valor da variável.
echo $nome;

echo "<br/>";
//Apagar valor da variável.
unset($nome);

//Verificar se a variável esta vazia. (isset)
if(isset($nome)){              //Concatenando frase colocando  .
	echo "Esta variável existe! E seu valor é: ".$nome;
}else{
	echo "A variável nome não existe!";
}

//////////////////////////////////////////////////////////////////
echo "<br><br>Tipo String<br>";
//String
$nome = "Cassio";
$sobrenome = "Moreira";

$nomeCompleto = $nome." ".$sobrenome;
echo $nomeCompleto;

//Númerico
$idade = 23;     //inteiro
$peso = 98.5;    //float
$sexo = false;   //boleano

echo "<br><br>Tipo array<br>";
//Array/vetores
$frutas = array("abacaxi", "laranja", "pressego", "goiaba", "uva");

echo $frutas[3];
echo "<br>";
echo $frutas[0];

echo "<br><br>Tipo objeto<br>";
//Objetos
$dataDeHoje = new DateTime();

var_dump($dataDeHoje);

echo "<br><br>O valor abaixo é referente a leitura de arquivo<br/>";
//Tipos compostos
$arquivo = fopen("00 - Comando para o git.txt","r");

var_dump($arquivo);

//Variáveis especias/ NULL/Vazio
echo "<br>";
//NULL
$nulo = NULL;
$vazio = "";

//Variáveis especias/ NULL/Vazio
echo "<br><br>Valor de GET<br>";
//$valor = $_GET["a"];
//var_dump($valor);

echo "<br><br>ARRAYs SUPER GLOBAIS<br>Outra alternativa de pegar uma string<br>";
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br><br>Pegar o nome do script<br>";
$nomeScript = $_SERVER["SCRIPT_NAME"];
echo $nomeScript;

//////////////////////////////////////////////////////////////

$nomeTeste = "T3ST3";
$nomeTestando = "T3ST@nd0";

function teste(){
	global $nomeTeste;
	echo "<br><br>(Variável fora da função)Testando uma variável fora da função: ".$nomeTeste."<br>";
	echo "Mais uma vez, agora na linha 93, mas sem o global: ".$nomeTestando."<br>";
}

teste();

?>