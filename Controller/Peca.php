<?php
require_once './ConexaoDB.php';
$idOrdem = filter_input(INPUT_GET, "id");

$status = "Aguardando Peça";

$sql= "UPDATE ordemdeservico SET  ordem_status = '$status' WHERE ordem_id = $idOrdem";
$query = mysqli_query($conecta, $sql);
if($query){
    echo "<div class='alert alert-success'>";
        echo "<strong>Você mudou o Status para <small class='text-danger'>Aguardando Peça</small></strong>";
        echo"</div>";
}else{
    echo "erro".mysqli_error($conecta);
}
