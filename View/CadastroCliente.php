<?php 
session_start();
 
$resposta = isset($_GET['resposta']) ? $_GET['resposta'] :0;
$erro = isset($_GET['erro']) ? $_GET['erro'] :0;
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../Model/css/estiloAuxiliar.css" />
    <!--Scripts JS e Jquery-->

    <script src="../Model/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Fim das Configs do Bootstrap-->
    <!--LINK dos Icons CSS-->
    <link rel="stylesheet" href="../Model/css/icon_fonts/css/font-awesome.min.css">
    <!--Arquivo externo JS com a��es dos botoes e forms-->
    <script src="Model/js/AcoesBotoes.js"></script>

    <title>Ana Celulares :: Intranet ::</title>
    
</head>

	<body>
	<?php 
		if($resposta == 1){
			echo "<div class='alert alert-success' role='alert'>";
		    echo "<strong>Concluido</strong> Cliente Cadastrado com Sucesso!";
		    echo"</div>";
		}
		if($erro == 2){
			echo "<div class='alert alert-warning' role='alert'>";
		    echo "<strong>ATENCAO!</strong> Cliente inexistente!";
		    echo"</div>";
		}
	?>
		<form class="form-group" id="formularioCliente" method="post" name="formularioCliente">
			
			<label id="conteudo">Os Aberta por:</label> <input type="text" readonly class="form-control" value="<?= $_SESSION['funcionario_nome'];?>">
			
			<label id="conteudo">Nome</label>
			<input type="text" name="cliente_nome" class="form-control ">
			<label id="conteudo">Telefone</label>
			<input type="text" name="cliente_telefone" class="form-control">
			<label id="conteudo">Email</label>
			<input type="text" name="cliente_email" class="form-control ">
			<hr>
			<button class="btn btn-outline-success" type="button" id="cadastrarcliente">Cadastrar e Abrir Ordem</button>
			
		</form>
	
	</body>
</html>