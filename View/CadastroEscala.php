<?php 
session_start();
$resposta = isset($_GET['resposta']) ? $_GET['resposta'] :0;
$erro = isset($_GET['erro']) ? $_GET['erro'] :0;
?>

<html lang="pt-br">
<head>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/ProjetoAnaCelulares/Model/css/estiloAuxiliar.css" />
    <!--Scripts JS e Jquery-->

    <script src="Model/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Fim das Configs do Bootstrap-->
    <!--LINK dos Icons CSS-->
    <link rel="stylesheet" href="Model/css/icon_fonts/css/font-awesome.min.css">
    <!--Arquivo externo JS com ações dos botoes e forms-->
    <script src="Model/js/AcoesBotoes.js"></script>

    <title>Ana Celulares :: Intranet ::</title>
    
</head>

	<body>
	
		<form class="form-group" id="CadastroEscala" method="post" name="formularioEscala">
			<small>Cadastre a Escala de folga dos colaboradores</small>
			
                        <div id="nomedoscolabs">
                            <?php 
                            include_once '../Controller/MostraFuncionario.php';
                            ?>
                        </div>
			
			<div class="row">
				<div class="col-md-6">
					<label>1ª Semana</label>
					<input type="date" name="primeiro" class="form-control">
				</div>
				<div class="col-md-6">
				<label>2ª Semana</label>
					
					<input type="date" name="segundo" class="form-control">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<label>3ª Semana</label>
					<input type="date" name="terceiro" class="form-control">
				</div>
				<div class="col-md-6">
					<label>4ª Semana</label>
					<input type="date" name="quarto" class="form-control">
				</div>
			</div>
			
		</form>
		<button type="button" class="btn btn-outline-info" href="" id="CadastraEscala">Cadastrar Escala</button>
	
	</body>
</html>