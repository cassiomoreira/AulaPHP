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
for ($j=date("Y"); $j >= date("Y")-10; $j--){
	echo 'option value="'.$j.'">'.$j.'</option>';
}
echo "</select>";

echo "<br>";
?>