<?php 
require_once('ConexaoDB.php');


// Recebe Valores do form

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$setor = filter_input(INPUT_POST, "setor");
$telefone = filter_input(INPUT_POST, "telefone");
$login = filter_input(INPUT_POST, "login");
$senha = md5(filter_input(INPUT_POST, "senha"));


// A��es SQL

$sql = "INSERT INTO funcionarios(funcionario_nome, funcionario_email, funcionario_telefone, funcionario_login, funcionario_senha, setor) VALUES('$nome','$email','$telefone','$login', '$senha','$setor')";
$func_query = mysqli_query($conecta, $sql);
if($func_query){

// Move a foto para a Pasta
	
	echo "<div class='alert alert-success'>";
        echo "<strong>Você Cadastrou um novo Colaborador com sucesso!</strong>";
        echo"</div>";
}else{
	echo "Erro no Cadastro". mysqli_error($conecta);
}
?>