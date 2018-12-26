<?php

//insere novos heróis no banco
//--> sem uso ainda

header('Content-Type: application/json');

//arquivo para testar o metodo create()
	include_once '../../config/Conexao.php';
	include_once '../../model/herois.php';
	//instanciando e retornando conexao
	$db = new Conexao();
	$conexao = $db->getConexao();
	//instanciando categoria
	$her = new Herois($conexao);
	//atribuindo os valores enviados aos atributos da her

    $her->nome = $_POST['nome'];
    $her->forca = $_POST['forca'];
    $her->agilidade = $_POST['agilidade'];
    $her->precisao = $_POST['precisao'];
    $her->classe = $_POST['classe'];
    $her->vida = $_POST['vida'];
    $her->povo = $_POST['povo'];
	$her->reino = $_POST['reino'];
	$her->img = $_POST['img'];

	//executando o método create

	if($her->create()){//retorna msg de erro ou sucesso
		$res = array('mensagem', 'Herói criado');
	}else{
		$res = array('mensagem', 'Erro ao criar herói');
	}
	echo json_encode($res);

