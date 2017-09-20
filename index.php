<?php
        session_start();
	$erro = (filter_input(INPUT_GET, "erro")) ? filter_input(INPUT_GET,"erro") :0;
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
         <script src="Model/js/intranet.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
         <!-- Fim das Configs do Bootstrap-->
         
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <!-- BARRA SUPERIOR -->
	<nav class="navbar barraSup">
		<div class="container">
			<div class="navbar-brand">
                            <img src="Model/imgs/logo_ana_ajustavel.svg" class="logoSup">
			</div>
			<div class="lead"> SOFTWARE ANA CELULARES</div>		
		</div>
	
	</nav>
		<section class="margem">
			<div class="container">
                            <div class="d-flex justify-content-center">
                                
                                <div class="card">
					<!-- AREA DO LOGIN-->
					<div class="card">
                                            <?php
                                    if($erro == 1){
                                        echo "<div class='alert alert-danger'>";
                                        echo "<p class='text-info'>Login ou Senha Inválidos!</p>";
                                        echo"</div>";
                                    }
                                ?>
					  <div class="card-header">
						ACESSO:
					  </div>
					  <div class="card-body">
                                              <form id="Formlogin" method="post" action="Controller/LoginFuncionario.php">
							<label><strong>Login:</strong></label>
							<input type="text" class="form-control " name="login" id="login">
							<label><strong>Senha:</strong></label>
                                                        <input type="password" class="form-control " name="senha" id="senha">
                                                        <hr>
                                                        <button href="" class="btn btn-outline-primary redondo" id="fazerlogin">Logar no Sistema</button>
						</form>
						
                            </div>
                            </div>
                                </div> 
			</div>
		</section>
   </body>
</html>
