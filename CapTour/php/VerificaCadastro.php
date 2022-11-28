<?php 
	
	include ('Conexao.php');

	$Nome = $_POST['Nome'];
	$Email = $_POST['Email'];
	$Senha = $_POST['Senha'];
	$Status = $_POST['Status'];

    $consulta = mysqli_query($cn, "SELECT * FROM `cadastro` WHERE `EMAIL` = '$Email'");
    $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    print_r($exibe);
	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>alert('Usuário já existente!')</script>";
	} else{
		//echo "Usuário NÃO cadastrado";
    $sql = "INSERT INTO `cadastro`(`NOME`, `EMAIL`, `SENHA`) values ('$Nome', '$Email', '$Senha')";
		$incluir = $cn->query($sql);
		echo "<script>alert('Usuário cadastrado!')</script>";
		header('location:../Index.php');
	}

?>



