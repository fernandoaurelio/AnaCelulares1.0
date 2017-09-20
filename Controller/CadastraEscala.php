<?php
require_once('ConexaoDB.php');

// Variaveis

$Funcionario_id = filter_input(INPUT_POST, "funcionario");
$semana1 = filter_input(INPUT_POST, "primeiro");
$semana2 = filter_input(INPUT_POST, "segundo");
$semana3 = filter_input(INPUT_POST, "terceiro");
$semana4 = filter_input(INPUT_POST, "quarto");

$sql = "INSERT INTO escalas (escala_funcId, semanaum, semanadois, semanatres, semanaquatro) VALUES ('$Funcionario_id','$semana1','$semana2','$semana3','$semana4')";
$query = mysqli_query($conecta,$sql);

if($query){
	echo "<div class='alert alert-success'>";
        echo "<strong>Escala de Folga Cadastrado com Sucesso!</strong>";
        echo"</div>";
}else{
	echo"erro".mysqli_error($conecta);
}