<?php
	require_once('ConexaoDB.php');

	$sql = "SELECT * FROM funcionarios";
	$query = mysqli_query($conecta,$sql);

	if($query){
		echo "<select name='funcionario' class='form-control'>";
		
		while($funcionario = mysqli_fetch_array($query)){
			echo "<option name='funcionario' value='".$funcionario['funcionario_id']."'>".$funcionario['funcionario_nome']."</option>";
		}
		echo "</select>";

	}else{
		echo "erro".mysqli_error($conecta);
	}
