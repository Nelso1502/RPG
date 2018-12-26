<?php 
class Conexao{
	private $conexao;
	public function getConexao(){
		$this->conexao = null;

		try {
		   $this->conexao = new PDO('pgsql:host=localhost;dbname=rpg;user=postgres;password=ifc');
		   $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   
		}catch(PDOException $e) {
			echo 'erro no PDO//ERROR: ' . $e->getMessage();
			die('');    
		}	
		return $this->conexao;	
	}
}

