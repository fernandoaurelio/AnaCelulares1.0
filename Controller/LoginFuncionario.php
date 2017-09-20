<?php
session_start();
require_once './ConexaoDB.php';

$login = filter_input(INPUT_POST, "login");
$senha = md5(filter_input(INPUT_POST, "senha"));

$sql = "SELECT * FROM funcionarios WHERE funcionario_login='$login' AND funcionario_senha='$senha'";
$query = mysqli_query($conecta, $sql);

if($query){
    $funcionario = mysqli_fetch_array($query);
    if($funcionario ==0){
        header('Location:../index.php?erro=1');
    }else{
       $_SESSION['funcionario_nome'] = $funcionario['funcionario_nome'];
    $_SESSION['funcionario_id'] = $funcionario['funcionario_id'];
    $_SESSION['funcionario_email']= $funcionario['funcionario_email'];
    $_SESSION['funcionario_telefone']=$funcionario['funcionario_telefone'];
    if($funcionario['setor'] == "CEO"){
         header('location:../sistema.php');
    }else{
        header('location:../sistemaintra.php');
    }
    
    
    }
    
}if(!$query){
    echo "Erro".mysqli_error($conecta);
}


