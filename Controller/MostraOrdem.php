<?php 
require_once('ConexaoDB.php');


//SQL
$sql = "SELECT DATE_FORMAT(saida, '%d/%m/%Y') AS s, DATE_FORMAT(entrada, '%d/%m/%Y') AS e, o.ordem_status,o.ordem_id,o.ordem_marca, o.ordem_modelo, o.ordem_defeito,o.ordem_estadoAparelho, o.acessorios,o.entrada, c.cliente_id, c.cliente_nome, c.cliente_telefone,c.cliente_email FROM ordemdeservico AS o JOIN cliente AS c ON(o.ordem_clienteId = c.cliente_id) ORDER BY o.entrada DESC";
$query = mysqli_query($conecta,$sql);



while($cliente = mysqli_fetch_array($query)){
    echo"<script type='text/javascript'>"
. "$('#ordem".$cliente['ordem_id']."').click(function(){"
        . "$.ajax({"
        . "url:'View/AdicionarOrcamento.php?id=".$cliente['ordem_id']."',"
        . "method:'get',"
        . "success:function(data){"
        . "$('#conteudo').html(data);}});});</script>";
    //Acao do botao remover
    echo"<script type='text/javascript'>"
. "$('#removeordem".$cliente['ordem_id']."').click(function(){"
        . "$.ajax({"
        . "url:'COntroller/RetirarOrdem.php?id=".$cliente['ordem_id']."',"
        . "method:'get',"
        . "success:function(data){"
        . "$('#conteudo').html(data);}});});</script>";
    //Acao do botao Aguardando Peça
    echo"<script type='text/javascript'>"
. "$('#peca".$cliente['ordem_id']."').click(function(){"
        . "$.ajax({"
        . "url:'COntroller/Peca.php?id=".$cliente['ordem_id']."',"
        . "method:'get',"
        . "success:function(data){"
        . "$('#conteudo').html(data);}});});</script>";
		switch($cliente['ordem_status']){
			case "Aguardando Orçamento":
			echo "<div class='alert alert-info'>";
			echo "<small>OS nº ".$cliente['ordem_id']." Aguardando Orçamento</small>";
                        echo "<input type='hidden' value='".$cliente['ordem_id']."' name='id'>";
			echo"<hr>";
			echo "<a href='#' id='ordem".$cliente['ordem_id']."' class='btn btn-success btn-sm' onclick='Orcamento()'>Add Orçamento</a>";
			echo "<a href='#' id='removeordem".$cliente['ordem_id']."' class='btn btn-danger btn-sm'>Retirada</a>";
			echo "</div>";
			break;

		case "Aprovado":
			echo "<div class='alert alert-success'>";
			echo "<small>OS nº ".$cliente['ordem_id']." Aprovado</small>";
			echo"<hr>";
			echo "<a href='#' id='aprova".$cliente['ordem_id']."' class='btn btn-danger btn-sm' >Retirar</a>";
                        echo "<a href='#' id='peca".$cliente['ordem_id']."' class='btn btn-warning btn-sm' >Aguardando Peça</a>";
			echo "</div>";
			break;
		case "Aguardando Peça":
			echo "<div class='alert alert-warning'>";
			echo "<small>OS nº ".$cliente['ordem_id']." Aguardando Peça</small>";
			echo"<hr>";
			echo "<a href='#' id='aguarda".$cliente['ordem_id']."' class='btn btn-success btn-sm' >Pe�a Chegou!</a>";
			echo "</div>";
			break;
		case "Retirado":
			echo "<div class='alert alert-danger'>";
			echo "<small>OS nº ".$cliente['ordem_id']." Retirado</small>";
			echo"<hr>";
			echo "<strong>Retirado dia ".$cliente['s']."</strong>";
			echo "</div>";
			break;
			
            }

}


	