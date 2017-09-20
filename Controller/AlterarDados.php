<?php
require_once './ConexaoDB.php';
$id = filter_input(INPUT_POST,"id");
$orcamento = filter_input(INPUT_POST, "orcamento");
$Status = "Em Conserto";
$total = filter_input(INPUT_POST, "total");
$sql = "UPDATE ordemdeservico SET orderm_orcamento = '$orcamento', ordem_status = '$Status', ordem_total=$total WHERE ordem_id = $id";
$query = mysqli_query($conecta, $sql);
if($query){
    echo " Dados alterados com sucesso";
}else{
    echo mysqli_errno($conecta);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

