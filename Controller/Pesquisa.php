<?php
 require_once './ConexaoDB.php';
 
 $pesquisa = filter_input(INPUT_GET, "pesquisacampo");
 
 $sql = "SELECT * FROM cliente WHERE cliente_nome LIKE  '%$pesquisa%'"; 
 $query = mysqli_query($conecta, $sql);
 echo"<script src='Model/js/AcoesBotoes.js'></script>";
while($resposta = mysqli_fetch_array($query)){
    if($resposta['cliente_nome']==""){
         echo " Usuario nao cadastrado";
     }else{
         
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<strong>".$resposta['cliente_nome']."</strong><small>".$resposta['cliente_telefone']."</small>";
    echo "<form id='resultadopesquisa' method='get'>";
    echo"<input type='hidden' value='".$resposta['cliente_nome']."' name='nome'>";
    echo"<input type='hidden' value='".$resposta['cliente_id']."' name='id'>";
    echo "</form>";
    echo "<hr>";
    echo "<button class='btn btn-outline-primary btn-sm' id='ordempesquisa'>Abrir Ordem de Serviço</button>";
    echo "<button class='btn btn-outline-warning btn-sm' id='verdados' type='button'>Editar dados do cliente</button>";
    echo "</div>";
    echo "</div>";
     }
}

     
 
     
     
    
    

 
        
     
 
    

 