<?php

session_start();

echo $_SESSION["nome"];


echo "<br><br>Id da sessão<br>";
echo session_id();

echo "<br><br>Força um novo Id da sessão<br>";
session_regenerate_id();
echo session_id();

echo "<br><br>Conteudo da sessão<br>";
var_dump($_SESSION);

echo "<br><br>Local onde salva a sessão<br>";
echo session_save_path();

echo "<br><br>Status da sessão<br>";
var_dump(session_status());

echo "<br><br>";
switch (session_status()) {
	case PHP_SESSION_DISABLED:
	echo "sessão desabilitada";
	break;

	case PHP_SESSION_NONE:
	echo "sessão habilitada, mas nunhuma existe";
	break;

	case PHP_SESSION_ACTIVE:
	echo "sessão habilitada, e uma existe";
	break;
}

?>