<?php

//selecionará outros dois personágens do banco e devolverá para escolha_herois.js

	header('Content-Type: application/json');
//arquivo para testar o metodo read()
	include_once '../../config/Conexao.php';
	include_once '../../model/herois.php';

	$db = new Conexao();
	$conexao = $db->getConexao();

	$her = new Herois($conexao);

	if (!isset($_GET['id'])){
		$resultado = $her->read(); //todos

	}else{
		$resultado = $her->read($_GET['id']);

	}
//	$resultado = $her->read(); //só um

	
	echo json_encode($resultado);

