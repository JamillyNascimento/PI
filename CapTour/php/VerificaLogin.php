<?php

	include ('Conexao.php');
    // Puxando Dados
	$Email = $_POST['Email'];
	$Senha = $_POST['Senha'];
	$Status = $_POST['Status'];
    
	// Verifica as informações do cadastro
    $consulta = mysqli_query($cn, "SELECT * FROM `cadastro` WHERE `EMAIL` = '$Email' and `SENHA` = '$Senha' and `STATUS` = '$Status'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    if(count($exibe) > 0){
		$status = $exibe[0]['STATUS'];

		if($status == 0){
			echo "<script>window.location='../User.php'</script>";
			session_start();
			// 0 perfil de usúario
		}
		else if($status == 1){
			echo "<script>window.location='../Admin.php'</script>";
			session_start();
			// 1 perfio de administrador
		}
    }
    else{
      echo "<script>window.location='../Index.php'</script>";
    } 

?>
