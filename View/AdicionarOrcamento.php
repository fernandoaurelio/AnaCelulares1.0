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
        <?php 
        require_once './SelecionaDadosOrdem.php';
        ?>
        <div class="container">
        <form id="addorcamento" class="form-group" method="post">
            <strong>Orçamento para a Ordem nº <input type="text" readonly name="id" value="<?= $idCliente?>" class="form-control"></strong>
                <strong>Parecer Técnico</strong>
                <textarea class="form-control" name="orcamento" cols="4" rows="8"></textarea>
                <strong>Total</strong>
                <input type="text" name="total" class='form-control'>
           
        
        <hr>
        <button class="btn btn-outline-info" href="" id="orcamento">Adicionar Orçamento</button>
        </form>
            
                
         </div>
    </body>
</html>
