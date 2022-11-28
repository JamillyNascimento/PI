<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'CapTour';

	$server_url = $_SERVER['SERVER_NAME'];

	
	if ($server_url !== 'localhost') {
		$servidor = 'sql313.epizy.com';
		$usuario = 'epiz_33092822';
		$senha = 'Eo7LUxpyjx';
		$banco = 'epiz_33092822_captour';
	}
	$cn = mysqli_connect($servidor, $usuario, $senha, $banco);

?>
