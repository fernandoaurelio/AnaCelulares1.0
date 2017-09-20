<?php 
	$host = "sql209.unaux.com";
	$usuario = "unaux_20718769";
	$senha = "pezqai1l";
	$DataBase = "unaux_20718769_anacelulares";

	// Conex�o com a DB

	$conecta = mysqli_connect($host, $usuario,$senha,$DataBase);
	if($conecta){
		echo"";
	}else{
		echo "Erro". mysqli_errno();
	}
?>