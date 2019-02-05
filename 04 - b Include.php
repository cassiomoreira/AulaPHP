<?php

//include "04 - a Include.php"; com o include o codigo funciona mesmo que naõ exista.
require "04 - a Include.php"; //Obriga que o arquivo exista e que esteja funcioando perfeitamente.

require_once "04 - a Include.php"; //Traz apenas uma vez

$resultado = somar(10, 20);

echo $resultado;

?>