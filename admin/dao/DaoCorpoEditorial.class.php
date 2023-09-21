<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'CorpoEditorial.class.php';

class DaoCorpoEditorial
{

	public function getCorpoEditorialPorAno($ano)
	{
		try {
			$sql = "SELECT * FROM tb_corpo_editorial WHERE ano=:ano ORDER BY nome ASC";

			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->bindValue(":ano", $ano);
			$sqlPreparada->execute();

			$membrosBD = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
			$membros = array();
			foreach ($membrosBD as $membro):
				$membros[] = $this->populaCorpoEditorial($membro);
			endforeach;

			return $membros;
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}

	private function populaCorpoEditorial($row)
	{
		$corpoEditorial = new CorpoEditorial();

		$corpoEditorial->setIdCorpoEditorial($row['id_corpo_editorial']);
		$corpoEditorial->setNome($row['nome']);
		$corpoEditorial->setFuncao($row['funcao']);
		$corpoEditorial->setAno($row['ano']);
	
		return $corpoEditorial;
	}
}
?>