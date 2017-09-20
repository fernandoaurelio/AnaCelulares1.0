<?php 
session_start();


unset($_SESSION['funcionario_nome']);
unset($_SESSION['funcionario_id']);

header("Location:../index.php?sair=1");