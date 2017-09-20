<?php
	
	
	require_once('ConexaoDB.php');
	$idCliente = $_GET['id'];
	$sql = "SELECT o.ordem_status,o.ordem_id,o.ordem_marca, o.ordem_modelo, o.ordem_defeito,o.ordem_estadoAparelho, o.acessorios,o.entrada, c.cliente_nome, c.cliente_telefone,c.cliente_email FROM ordemdeservico AS o JOIN cliente AS c ON(o.ordem_clienteId = c.cliente_id)  WHERE ordem_clienteId = $idCliente";
	$query = mysqli_query($conecta,$sql);

	// Retorno

	$cliente = mysqli_fetch_array($query);

	$nome = $cliente['cliente_nome'];
	$telefone = $cliente['cliente_telefone'];
	$status = $cliente['ordem_status'];
	$ordem = $cliente['ordem_id'];
	$marca = $cliente['ordem_marca'];
	$modelo = $cliente['ordem_modelo'];
	$defeito = $cliente['ordem_defeito'];
	$estadoAparelho = $cliente['ordem_estadoAparelho'];
	$acessorio = $cliente['acessorios'];
	$dataEntrada = $cliente['entrada'];
?>