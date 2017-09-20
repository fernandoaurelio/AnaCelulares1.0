<?php
session_start();

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="Model/css/estilo.css" />
         <!--Scripts JS e Jquery-->
         <script src="Model/js/jquery-3.2.1.min.js"></script>
         <script src="Model/js/AcoesBotoes.js"></script>
         <script src="Model/js/PrintThis.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
         <!-- Fim das Configs do Bootstrap-->
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form class="form-group" id="formularioOrdem" method="post">
            <label id="conteudo">Os Aberta por:</label> <input type="text" readonly class="form-control" value="<?= $_SESSION['funcionario_nome'];?>">
            <input type="hidden" name="id_funcionario" value="<?= $_SESSION['funcionario_id']; ?>">	
            <?php 
            require_once ('ConexaoDB.php');

                            $nome = filter_input(INPUT_GET, "nome");
                           
                            $sql = "SELECT * FROM cliente WHERE cliente_nome = '$nome'";
                            $query = mysqli_query($conecta, $sql);

                            $dadosCliente = mysqli_fetch_array($query);

                             $dadosCliente['cliente_id'];
                             $dadosCliente['cliente_nome'];
                            
                           
            echo"<label id='conteudo'>Cliente:</label> <input type='text' readonly class='form-control' value='".$dadosCliente['cliente_nome']."' name='nome' id='nome'>";
            echo"<input type='hidden' name='id' value='".$dadosCliente['cliente_id']."'> ";

            
            ?>
            <label id="conteudo">Marca</label>
            <input type="text" name="cliente_marca" class="form-control ">
            <label id="conteudo">Modelo</label>
            <input type="text" name="cliente_modelo" class="form-control ">
            <label id="conteudo">Acessórios</label>
            <textarea name="acessorios" class="form-control "  rows="4" cols="20" placeholder="Digite se o aparelho entrou para a assistencia com algum acessorio. Ex: Chip, Carregador, Bateria etc. Caso contrario, digite 'Cliente levou todos os acessorios'"></textarea>
            <label id="conteudo">Estado do Aparelho</label>
            <textarea name="estadoAparelho" class="form-control"  rows="4" cols="20" placeholder="Escreva se o aparelho possui marcas de quedas, arranhoes no geral. Caso nao tenha nenhum, digite que nao possue arranhoes ou marcas de quedas!"></textarea>
            <label id="conteudo">Defeito Reclamado</label>
            <textarea name="cliente_defeito" class="form-control "  rows="4" cols="20"></textarea>
            <hr>

            <button class="btn btn-outline-success" type="button" id="CadastrarOs" href="" >Cadastrar e Imprimir</button>
            </form>
    </body>
</html>
