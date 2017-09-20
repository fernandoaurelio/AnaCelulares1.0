<?php
	session_start();
	require_once('ConexaoDB.php');
	$idCliente = $_GET['id'];
	$sql = "SELECT o.ordem_id,o.ordem_marca, o.ordem_modelo, o.ordem_defeito,o.ordem_estadoAparelho, o.acessorios,o.entrada, c.cliente_id, c.cliente_nome, c.cliente_telefone,c.cliente_email FROM ordemdeservico AS o JOIN cliente AS c ON(o.ordem_clienteId = c.cliente_id)  WHERE  o.ordem_id = $ordem AND c.cliente_id=$idCliente";
	$query = mysqli_query($conecta,$sql);

	// Retorno

	$cliente = mysqli_fetch_array($query);
        $id = $cliente['cliente_id'];
	$nome = $cliente['cliente_nome'];
        $email = $cliente['cliente_email'];
	$telefone = $cliente['cliente_telefone'];
	$ordem = $cliente['ordem_id'];
	$marca = $cliente['ordem_marca'];
	$modelo = $cliente['ordem_modelo'];
	$defeito = $cliente['ordem_defeito'];
	$estadoAparelho = $cliente['ordem_estadoAparelho'];
	$acessorio = $cliente['acessorios'];
	$dataEntrada = $cliente['entrada'];

        