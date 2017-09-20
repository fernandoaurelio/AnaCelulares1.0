<?php 
session_start();
require_once('ConexaoDB.php');

// Variaveis
$cliente_id = $_POST['id'];
$funcionario_id = $_POST['id_funcionario'];
$marca = $_POST['cliente_marca'];
$modelo = $_POST['cliente_modelo'];
$defeito = $_POST['cliente_defeito'];
$estadoAparelho = $_POST['estadoAparelho'];
$status = "Aguardando Orçamento";
$acessorios = $_POST['acessorios'];

$sql = "INSERT INTO ordemdeservico (ordem_marca, ordem_modelo,acessorios,ordem_defeito,ordem_estadoAparelho,ordem_status,ordem_clienteId,ordem_FuncId) VALUES ('$marca','$modelo','$acessorios','$defeito','$estadoAparelho','$status',$cliente_id,$funcionario_id)"; 
$query = mysqli_query($conecta,$sql);

if($query){
	echo "<script>window.open('http://localhost/SistemaCelular/View/OrdemImpressao.php?id=$cliente_id', width=800, height=600)</script>";
//header("Location:../View/OrdemImpressao.php?id=$cliente_id");
}else{
	header("Location:../View/AbrirOrdem.php?erro=1");
}

?>