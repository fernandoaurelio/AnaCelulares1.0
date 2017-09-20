f<?php 
session_start();

$sair = filter_input(INPUT_GET, "sair") ? filter_input(INPUT_GET, "sair") : 0;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <!--Arquivo externo JS com a��es dos botoes e forms-->
    <script src="Model/js/intranet.js"></script>
    <script src="Model/js/AcoesBotoes.js"></script>

    <title>Ana Celulares :: Intranet ::</title>
    
</head>
<body>
    <!--Barra de Navega��o-->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <!--LogoMarca-->
            <a class="navbar-brand" href="#"><img class="logo d-inline-block align-top" src="http://localhost/ProjetoAnaCelulares/Model/imgs/logo_ana_ajustavel.svg" /></a>

            <!-- Botoes da NaveBar-->
            <ul class="nav nav-pills">
			<li class="nav-item"><a class="nav-link" href="" id="cadastrarCliente"><i class="fa fa-user"></i> Cadastrar Cliente</a></li>
                <li class="nav-item"><a class="nav-link" href="" id="cadastrarOrdem"><i class="fa fa-file"></i> Cadastrar OS</a></li>
                <li class="nav-item"><a class="nav-link" id="CadastroFuncionario" href=""><i class="fa fa-user-plus"></i> Cadastrar Funcionario</a></li>
                <li class="nav-item"><a class="nav-link" href="" id="escalas"><i class="fa fa-calendar"></i> Escalas</a></li>

            </ul>
            

            <!--CropDown Loggin Intranet-->
            <!--Bot�o INTRANET-->
            <button id="logoff" type="button" class="btn btn-outline-warning btn-sm" href='http://localhost/ProjetoAnaCelulares/Controller/LogoffFuncionario.php'><i class="fa fa-power-off"></i> LogOut</button>

    </nav>
    <!-- FIm da Barra de Navega��o -->
    <!--Campo de Pesquisa da Navbar-->
            <div class="form-group row jumbotron" >
               
            </div>
    <!--Inicio do Corpo-->
    <div id="fundotexto">

        <div class="container">
            <div class="row">
                <!--Sess�o a Esquerda-->
                <div class="col-md-3" id="ordens">
				
				
                </div>

                <!--Sess�o Central-->
                <div class="col-md-6">
					<div class="container" id="conteudo">
						<?php 
							if($sair == 1){
								 echo "<div class='alert alert-success' role='alert'>";
								 echo "<strong>LogOff</strong> Até Breve!";
								 echo"</div>";
							 };
							 
						?>
				    </div>
                </div>
                <!--Sess�o Direita-->
                <div class="col-md-3">
                    <div class="card ">
                        <div class="panel-content panel-dialog" role="dialog">
                            <div class="card-header">
                                <p class="card-title"><?=  $_SESSION['funcionario_nome'], $_SESSION['funcionario_id'];?></p>
                            </div>
                            <div class="container">
                                <div class="card-block">
                                    <div class="text-center">
                                        <img class="PerfilImg" src="http://localhost/ProjetoAnaCelulares/Model/imgs/default-user-image.png">
                                    </div>
                                    <hr>
                                    <h4 class="card-title">Escala de Folgas</h4>
                                    <div id="mostraEscala"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-success btn-md">Acessar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>