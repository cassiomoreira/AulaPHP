<?php

$idade = 22;

$idadeMenor = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idade < $idadeMenor){
	echo "Criança<br><br>";
}else if($idade < $idadeMaior){
	echo "Jovem<br><br>";
}else if($idade < $idadeMelhor){
	echo "Adulto<br><br>";
}else{
	echo "Idoso<br><br>";
}

echo ($idade < $idadeMaior)?"Menor de idade<br>":"Maior de idade<br><br>";


////////////////////////////////////////////////////////
//Swite case

$diaDaSemana = date("w");

switch($diaDaSemana){
	case 0:
	echo "Domingo";
	break;

	case 1:
	echo "Segunda";
	break;
	
	case 2:
	echo "Terça";
	break;
	
	case 3:
	echo "Quarta";
	break;
	
	case 4:
	echo "Quinta";
	break;
	
	case 5:
	echo "Sexta";
	break;
	
	case 6:
	echo "Sabado";
	break;

	default:
	echo "Data inválida";
	break;
}

echo "<br><br>";

for ($i = 0; $i < 15; $i++){
	if($i > 4 && $i < 7) continue;

	if($i >=9) break;

	echo "$i ";
}

echo "<br><br>";
echo "<select>";
for ($i=date("Y"); $i >= date("Y")-10; $i--){
	echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>";
echo "<br><br>";


//for para Array e objetos

$meses = array(
"Janeiro","Fevereiro","Março","Abril","Maio","junho","julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

foreach ($meses as $num => $mes) {
	echo "O mês é: ".$num." ou ".$mes."<br>";
}

?>
<form>
	<input type="text" name="Nome">
	<input type="date" name="Nascimento">
	<input type="int" name="Idade">
	<input type="submit" value="Enviar">
</form>

<?php
/*

if(isset($_GET)){
	foreach ($_GET as $key => $value) {
		echo "Nome do campo: ". $key."<br>";
		echo "Valor do campo: ". $value;
		echo "<hr>";
	}
}*/


//////////////////////////////////////////////////////////
//While
$condicao = true;

while(true){
	$numero = rand(1,5);
	if($numero == 3){
		break;
	}else{
		echo "$numero ";
	}
}

echo "<br><br>";
$total = 100;
$desconto = 0.9;
do{
	$total *= $desconto;
}while ($total > 100);
echo $total;
?>