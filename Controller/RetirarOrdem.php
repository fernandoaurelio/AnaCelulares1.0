<?php
require_once './ConexaoDB.php';
$idOrdem = filter_input(INPUT_GET, "id");

$status = "Retirado";
$datasainda = date("Y-m-d h:i:sa");
$sql= "UPDATE ordemdeservico SET saida=NOW(), ordem_status = '$status' WHERE ordem_id = $idOrdem";
$query = mysqli_query($conecta, $sql);
if($query){
    echo "<div class='alert alert-success'>";
        echo "<strong>A Ordem ".$idOrdem." foi entregue ao cliente</strong>";
        echo"</div>";
}else{
    echo "erro".mysqli_error($conecta);
}
