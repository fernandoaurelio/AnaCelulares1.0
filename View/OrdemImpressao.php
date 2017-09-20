<?php 
session_start();
	
	 require_once('SelecionaDadosOrdem.php');

?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		
		<!--Scripts JS e Jquery-->
		
		<script src="../Model/js/jquery-3.2.1.min.js"></script>
                <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- Fim das Configs do Bootstrap-->
		
		<!--LINK dos Icons CSS-->
                <link rel="stylesheet" href="../Model/css/icon_fonts/css/font-awesome.min.css">
		<!--Arquivo externo JS com a��es dos botoes e forms-->
		<script src="../Model/js/intranet.js"></script>
		<!--SCRIPT PARA A IMPRESSAO -->
		
		<title>Ana Celulares :: Intranet ::</title>
    
	</head>

	<body>
		<a href="" id="BotaoImprime" class="btn btn-outline-warning" onclick="printJS('area', 'html')">Imprimir Ordem</a>
		<table width=100% class="table" id="area">
	
	<tr>
		<td>
		<h6 class="lead"> <strong>ANA</strong>Celulares</h6>
			<small><p class="text-justify">R. Orestes Guimarães, 720 - América <br> Anexo a Galeria de Lojas e Serviços BIG BEIRA RIO<br> Telefone: (47) 3422-4415</P></small>
		</td>
		<td>
			<p class="text-center"><img src="../Model/imgs/logo_ana_ajustavel.svg" width=80px</P>
		</td>
		<td>
                    <p class="text-right"><strong><small>Número da Ordem de Serviço</small></strong></P><h4  CLASS="text-right"><?= $ordem;?></h4>
		</td>
	</tr>
	<tbody>
    <tr>
      
      <td><small><strong>Cliente:</strong> <?= $nome;?></small></td>
      <td><small><strong>Telefone:</strong><?= $telefone;?></small></td>
      <td><small><strong>Data de Abertura:</strong> <?= $dataEntrada;?></small></td>
    </tr>
    <tr>
      
      <td><small><strong>Marca do Aparelho:</strong> <?= $marca;?></small></td>
      <td><small><strong>Modelo:</strong> <?= $modelo;?></small></td>
      <td><small><strong>Acessorios:</strong> <?= $acessorio;?></small></td>
    </tr>
    <tr>
      <td><small><strong>Defeito Reclamado:</strong><?= $defeito;?></small></td>
      <td><small><strong>Estado do Aparelho</strong> <?= $estadoAparelho;?></small></td>
      <td><small><strong>OS Aberta por:</strong> <?= $_SESSION['funcionario_nome'];?></small></td>
    </tr>
	<tr>
      <td><small><strong>Parecer Técnico</strong></small>
		<br>
		
		_________________________________________________<br>
		_________________________________________________<br>
		_________________________________________________<br>
		_________________________________________________<br>
		_________________________________________________<br>
		_________________________________________________<br>
		
	  </td>
      <td><small><strong>Valor do Orçamento:</strong> ________________________</small>
	  <br>
		<br>
		<br><br><br>
		<br>
		</td> 
      <td><br>
		
		<br>
		<br>
		<br>
		<br><br>
		
		<br></td>
    </tr>
	<tr>
            
      <td><small><strong>VIA DO CLIENTE</strong></small></td>
      
    </tr>
	<tr>
      <td><small><strong class="lead">ANA Celulares<br> <small> Anexo a Galeria de Lojas e Serviços BIG BEIRA RIO<br> Telefone: (47) 3422-4415</P></small></td>
      <td><small><strong>Nº da OS</strong> <?= $ordem;?></small>
	  <br><small><strong>Marca</strong> <?= $marca;?></small>
	  <br><small><strong>Modelo</strong> <?= $modelo;?></small>
	   <br><small><strong>Defeito</strong> <?= $defeito;?></small></td>
      <td><small><strong>Data de Abertura</strong> <?= $dataEntrada;?></small>
	  <br><small><strong>OS Aberta por:</strong> <?= $_SESSION['funcionario_nome'];?></small></td>
    </tr>
    <tr>
        <td>
           
		<br><br><br>
		<br>
                <p class="text-center">-----------------------------------</p>
            <p class="text-center"><?= $_SESSION['funcionario_nome'];?></p>
        </td>
        <td >
            <br>
		<br>
                <br><br>
                <p class="text-center">---------------------------------</p>
            <p class="text-center"><?= $nome;?></p>
        </td>
  </tbody>
</table>

		
	</body>
</html>