<?php


//tá errado ainda
header('Content-Type: application/json');

	include_once '../../config/Conexao.php';
	include_once '../../model/herois.php';


	$db = new Conexao();
	$conexao = $db->getConexao();
	//instanciando categoria
	$her = new Herois($conexao);

	$dados = json_decode(file_get_contents('php://input'), true);

	$her->id = $dados['id'];
	$her->nome = $_POST['nome'];
    $her->forca = $_POST['forca'];
    $her->agilidade = $_POST['agilidade'];
    $her->precisao = $_POST['precisao'];
    $her->classe = $_POST['classe'];
    $her->vida = $_POST['vida'];
    $her->povo = $_POST['povo'];
	$her->reino = $_POST['reino'];
	$her->img = $_POST['img'];
	$her->jogando = $_POST['jogando'];

	
	if($her->update()){//retorna msg de erro ou sucesso
		$res = array('mensagem', 'Mudou');
	}else{
		$res = array('mensagem', 'Erro ao mudar');
	}
	echo json_encode($res);

