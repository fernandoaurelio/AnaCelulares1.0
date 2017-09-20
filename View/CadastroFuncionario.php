

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   
    <!--Scripts JS e Jquery-->
    <script src="Model/js/AcoesBotoes.js" ></script>
    <script src="Model/js/jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Fim das Configs do Bootstrap-->
    <!--LINK dos Icons CSS-->
    <link rel="stylesheet" href="Model/css/icon_fonts/css/font-awesome.min.css">
    <!--Arquivo externo JS com a��es dos botoes e forms-->
    
    <title>Ana Celulares :: Intranet ::</title>
</head>
<body>
    
               
	<form class="form-group" id="FormFuncionario" method="post">
		<label id="conteudo">Nome</label>
			<input type="text" name="nome" class="form-control ">
		<label id="conteudo">Email</label>
			<input type="email" name="email" class="form-control">
		<label id="conteudo">Telefone</label>
			<input type="text" name="telefone" class="form-control ">
		<label id="conteudo">Setor</label>
                <select  class="form-control " name="setor">
                    <option name="setor" value="Vendas">Vendas</option>
                    <option name="setor" value="CEO">CEO</option>
                    <option name="setor" value="Técnico">Técnico</option>
                </select>
		<label id="conteudo">Login</label>
			<input type="text" name="login" class="form-control">
		<label id="conteudo">Senha</label>
			<input type="password" name="senha" class="form-control ">
			
	</form>
	<hr>
			<button class="btn btn-outline-success"  id="CadastroFuncionario">Cadastrar Funcionario</button>
						
	</body>
</html>