<?php 
	session_start();

	require_once('ConexaoDB.php');
        
	// Variaveis para Cadastro

	$nome = $_POST['cliente_nome'];
	$telefone = $_POST['cliente_telefone'];
	$email = $_POST['cliente_email'];

	$sql = "INSERT INTO cliente (cliente_nome, cliente_telefone, cliente_email) VALUES('$nome','$telefone','$email')";
	$query = mysqli_query($conecta,$sql);

	// Condi��o de retorno

	if($query){
		header("Location:../View/AbrirOrdem.php?nome=$nome");
	} else{
		echo "Nao foi possivel cadastrar".mysqli_errno($conecta);
	}
?>