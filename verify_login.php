<?php
session_start();

 [ 'login' => $login, 'senha' => $senha ] = $_POST;

function verify(string $login, string $senha) {
	return ($login === 'admin' && $senha === 'admin') ? true : false;
}

function enableOrDisable(int $isLogged) {
	$process = [ "userError", "logged" ];
	
	$_SESSION[$process[$isLogged]] = true;

	unset($_SESSION[$process[!$isLogged]]);
}

if (verify($login, $senha)) {
	
	enableOrDisable(1);
	
	header("Location: caixa.php");
}
else {
	enableOrDisable(0);

	header("Location: index.php");
}