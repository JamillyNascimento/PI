<?php

    require("Conexao.php");

	$Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
	$Mensagem = $_POST['Mensagem'];

	$consulta = mysqli_query($cn, "SELECT * FROM `contato` WHERE `EMAIL` = '$Email'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	
	    $sql = "INSERT INTO `contato`(`NOME`, `EMAIL`, `MENSAGEM`) values ('$Nome', '$Email', '$Mensagem')";
		$incluir = mysqli_query($cn,$sql);
		echo "<script>alert('Mensagem enviada!')</script>";
		header('location:../Contato.php');
?>