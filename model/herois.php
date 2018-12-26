<?php
/*
	Classe que manipula os dados de post
*/

class Herois
{
	
	//atributos correspondentes aos da tabela post
    public $id;
    public $nome;
    public $forca;
    public $agilidade;
    public $precisao;
    public $classe;
    public $vida;
	public $povo;
    public $reino;
    public $img;
    public $jogando;
	//variável para a conexão
	private $conexao;

	//sempre que um objeto é instanciado
	//já recebe a conexão
	public function __construct($con)
	{
		$this->conexao = $con;
	}

	//faz uma consulta e retorna um resultado
	public function read($idHeroi=null) {
		if (isset($idHeroi)) {// id tem valor		
			$query = "SELECT id,nome,forca,agilidade,precisao,reino,povo,vida,img,classe FROM heroi 
			WHERE id=:id ORDER BY id";
		//prepara a execucao
			$stmt = $this->conexao->prepare($query);
			$stmt->bindParam('id', $idHeroi);
		}else{// id nao tem valor	
			$query = "SELECT id,nome,forca,agilidade,precisao,reino,povo,vida,img,classe FROM heroi";
		//prepara a execucao
			$stmt = $this->conexao->prepare($query);
		}
		//executa a consulta
		$stmt->execute();
		//transforma os resultados em um array
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//retorna o resultado
		return $resultado;
	
	}
	function create() {
			try {
				$query = "INSERT INTO heroi (nome,forca,agilidade,precisao,reino,povo,vida,img,classe,jogando)
                values(nome,forca,agilidade,precisao,reino,povo,vida,img,classe,'true')";
				//prepara a execucao
				$stmt = $this->conexao->prepare($query);
				$stmt->bindParam('nome', $this->nome);
                $stmt->bindParam('forca', $this->forca);
                $stmt->bindParam('agilidade', $this->agilidade);
                $stmt->bindParam('precisao', $this->precisao);
                $stmt->bindParam('reino', $this->reino);
                $stmt->bindParam('povo', $this->povo);
                $stmt->bindParam('vida', $this->vida);
                $stmt->bindParam('img', $this->img);
                $stmt->bindParam('classe', $this->classe);
				//executa a consulta
				$stmt->execute();
				//transforma os resultados em um array
				$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
				//retorna o resultado
				return true;
				} catch(Exception $e) {
		  		    die("erro com o servidor: " . $e->getMessage());
			}
		}

	

	//tá errado ainda
	function update() {
			try{
				$query = "UPDATE heroi SET id=:id, nome=:nome, forca=:forca, agilidade=:agilidade, precisao=:precisao,
				vida=:vida, reino=:reino, povo=:povo, img=:img, jogando=:jogando WHERE id=:id";
				//prepara a execucao
				//-------------------------------------------------------------------------
				$stmt = $this->conexao->prepare($query);
				$stmt->bindParam('id', $id);
				$stmt->bindParam('id', $id);
                $stmt->bindParam('nome', $nome);
                $stmt->bindParam('forca', $forca);
                $stmt->bindParam('agilidade', $agilidade);
                $stmt->bindParam('precisao', $precisao);
			
				//executa a consulta
				$stmt->execute();
				//transforma os resultados em um array
				$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
				//retorna o resultado
				return $resultado;
			}catch(Exception $e) {
		  		    die("erro com o servidor: " . $e->getMessage());
			}
	}
	 function delete($id=null) {
		if ($autorizado == 'true') {
			try {
				if (isset($id)) {// id tem valor		
					$query = "DELETE * FROM post WHERE id=:id";
					//prepara a execucao
					$stmt = $this->conexao->prepare($query);
					$stmt->bindParam('id', $id);
				}
				//executa a consulta
				$stmt->execute();
				//transforma os resultados em um array
				$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
				//retorna o resultado
				return $resultado;
			}catch(Exception $e) {
		  		    die("erro com o servidor: " . $e->getMessage());
			}
		//}else{
		//	aut();
		}
	}
}
