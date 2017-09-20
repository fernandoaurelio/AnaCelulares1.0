<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="Model/css/estilo.css" />
        <!--Scripts JS e Jquery-->
       
        <script  src="https://code.jquery.com/jquery-3.2.1.min.js"integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">  </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <!-- Fim das Configs do Bootstrap-->
        
        
        <!--LINK dos Icons CSS-->
        <link rel="stylesheet" href="Model/css/icon_fonts/css/font-awesome.min.css">
        <script src="Model/js/AcoesBotoes.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <form id="dadoscliente" class="form-group">
               
                    <?php 
                        require_once './ConexaoDB.php';
                        $id = filter_input(INPUT_GET, "id");
                        $sql = "SELECT o.ordem_id,o.ordem_marca, o.ordem_modelo, o.ordem_defeito,o.ordem_estadoAparelho,o.ordem_status, o.acessorios,o.entrada, c.cliente_id, c.cliente_nome, c.cliente_telefone,c.cliente_email FROM cliente AS c LEFT JOIN ordemdeservico AS o ON(o.ordem_clienteId = c.cliente_id) WHERE c.cliente_id=$id";
                        $query = mysqli_query($conecta,$sql);
                        $cliente = mysqli_fetch_assoc($query);
                    ?>
                   
                        <strong>Nome</strong>
                            <input type="text" class="form-control  " value="<?=$cliente['cliente_nome']; ?>" name="nome">
                            <input type="hidden" name="id" value="<?=$cliente['cliente_id']; ?>">
                     
                            <strong>Email</strong>
                            <input type="text" class="form-control " value="<?= $cliente['cliente_email']; ?>" name="email">
                     
                                    <strong>telefone:</strong>
                                    <input type="text" class="form-control " value="<?= $cliente['cliente_telefone']; ?>" name="telefone">
                                
                            </form>

                            
                  <strong class="text-center">Histórico</strong>
                <hr>
                <strong>Ordens em Aberto</strong>
                    <?php
                         $id = filter_input(INPUT_GET, "id");
                        $sql = "SELECT DATE_FORMAT(saida, '%d/%m/%Y') AS s, DATE_FORMAT(entrada, '%d/%m/%Y') AS e,o.ordem_id,o.ordem_marca, o.ordem_modelo, o.ordem_defeito,o.ordem_estadoAparelho,o.ordem_status, o.acessorios,o.entrada, c.cliente_id, c.cliente_nome, c.cliente_telefone,c.cliente_email FROM cliente AS c LEFT JOIN ordemdeservico AS o ON(o.ordem_clienteId = c.cliente_id) WHERE c.cliente_id=$id";
                        $query = mysqli_query($conecta,$sql);
                              while($ordem = mysqli_fetch_array($query)){
                                 switch($ordem['ordem_status']){
                                     case "Aguardando Orçamento":
                                        echo "<div class='alert alert-success'>Ordem nº ".$ordem['ordem_id']; 
                                        echo "<br>Data de Entrada:".$ordem['entrada'];
                                        echo"</div>"; 
                                        break;
                                     case "Retirado":
                                         echo "<div class='alert alert-danger'>Ordem nº ".$ordem['ordem_id']; 
                                        echo " <br>Data de Retirada:".$ordem['s'];
                                        echo"</div>"; 
                                        break;
                                     case "Em Conserto":
                                         echo "<div class='alert alert-info'>Ordem nº ".$ordem['ordem_id']; 
                                        echo " <br>Status:<strong> Em Conserto</strong>";
                                        echo"</div>"; 
                                        break;
                                     case "Aguardando Peça":
                                         case "Em Conserto":
                                         echo "<div class='alert alert-warning'>Ordem nº ".$ordem['ordem_id']; 
                                        echo " <br>Status:<strong> Aguardando Peça</strong>";
                                        echo"</div>"; 
                                        break;
                                 }
                                  
                              }
                          
                        ?>
                    <hr>
                    
                        
                    
                                  
            <button class="btn btn-outline-info" id="editadados">Editar Dados</button>
        </div>
    </body>
</html>
