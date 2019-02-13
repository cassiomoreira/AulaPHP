<?php
echo "Stings <br>";
//Definição de lingua portuquesa em windows e linux
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//dia da semana e mes
echo strftime("%A %B");

echo "<br>";

echo "<br>";

echo date("d/m/y");

echo "<br>";

echo date("D/M/Y");

echo "<br>";

echo "";

$ts = strtotime("2010-10-11");

echo date("l, d/m/Y", $ts);

echo "<br>";

//Agora
$ts = strtotime("now");

echo date("l, d/m/Y", $ts);

echo "<br>";

//Um dia adiante
$ts = strtotime("+1 day");

echo date("l, d/m/Y", $ts);

echo "<br><br>Objetos date<br>";

$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");


echo "<br><br>";

$dti = new DateTime();

//Periodo de 15 Dias
$periodo = new DateInterval("P15D");

echo "Data antes: ".$dti->format("d/m/Y H:i:s");

$dti->add($periodo);

echo "<br>Data depois: ".$dti->format("d/m/Y H:i:s");
?>