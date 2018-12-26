<?php
include_once '../../config/Conexao.php';
include_once '../../model/herois.php';

$db = new Conexao();
	$conexao = $db->getConexao();

    $her = new Herois($conexao);
    
    $result = $her->delete($_GET['id']);

	echo json_encode($result);
