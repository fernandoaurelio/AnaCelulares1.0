<?php
session_start();
require_once('ConexaoDB.php');
$funcionario = $_SESSION['funcionario_id'];
$sql = "SELECT DATE_FORMAT(semanaum, '%d/%m/%Y') AS s1,DATE_FORMAT(semanadois, '%d/%m/%Y') AS s2,DATE_FORMAT(semanatres, '%d/%m/%Y') AS s3,DATE_FORMAT(semanaquatro, '%d/%m/%Y') AS s4 FROM escalas  WHERE escala_funcId = $funcionario";
$query = mysqli_query($conecta,$sql);

$escala = mysqli_fetch_array($query);

	echo"<ul>";
	echo"<li>".$escala['s1']."</li>";
	echo"<li>".$escala['s2']."</li>";
	echo"<li>".$escala['s3']."</li>";
	echo"<li>".$escala['s4']."</li>";
	echo"</ul>";
