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
        // put your code here
        ?>
        <!-- BARRA SUPERIOR -->
        <nav class="navbar barraSup">
            <div class="container">
                <div class="navbar-brand">
                    <img src="Model/imgs/logo_ana_ajustavel.svg" class="logoSup">
                </div>

                <p>Seja Bem Vindo <?= $_SESSION['funcionario_nome']; ?></p>
                <div class="text-center lead"> SOFTWARE ANA CELULARES</div>
                <a class="btn btn-info redondo" id="logoff" href="Controller/LogoffFuncionario.php" type="button"><i class="fa fa-power-off" aria-hidden="true"></i> LogOff</a>

            </div>

        </nav>
        <!-- Menu de bototes -->
        <div class="barraBranca">
            <div class="container ">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col-8">
                        <ul class="nav nav-pills">
                            <li class="nav-item" ><a class="nav-link" href="" id="cliente"><i class="fa fa-user"></i> Cadastrar Cliente</a></li>
                            <li class="nav-item"><a class="nav-link" href="" id="pesquisa"><i class="fa fa-search"></i> Pesquisar Cliente</a></li>
                            <li class="nav-item"><a class="nav-link" id="funcionario" href=""><i class="fa fa-user-plus"></i> Cadastrar Funcionario</a></li>
                            <li class="nav-item"><a class="nav-link" href="" id="escalas"><i class="fa fa-calendar"></i> Escalas</a></li>
                        </ul>
                    </div>
                    <div class="col">

                    </div>
                </div>

            </div>

        </div>
        <!-- fim do menu -->
        <section class="margem">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label>Ordens Aguardando Orçamento</label>
                        <div id="ordens"></div>
                    </div>
                    <div class="col-5">
                        <div id="conteudo"></div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center "><?= $_SESSION['funcionario_nome']; ?></li>
                                <li class="list-group-item">
                                    <div class="text-center">
                                        <img src="Model/imgs/default-user-image.png" class="PerfilImg">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="lead text-center">Escala de Férias</h6>
                                    <hr>
                                    <div id="escala"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
