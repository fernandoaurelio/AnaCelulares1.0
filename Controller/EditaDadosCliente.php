<?php
require_once './ConexaoDB.php';
$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "nome");
$telefone = filter_input(INPUT_POST, "telefone");
$email = filter_input(INPUT_POST, "email");

$sql = "UPDATE cliente SET cliente_nome = '$nome', cliente_email = '$email', cliente_telefone = '$telefone' WHERE cliente_id = $id";
$query = mysqli_query($conecta, $sql);

if($query){
    echo "<div class='alert alert-success'>";
    echo "<strong>Dados do cliente Alterados com Sucesso!</strong>";
    echo"</div>";
}else{
    echo "erro".mysqli_errno($conecta);
    echo"<hr>".mysqli_error($conecta);
}