<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'CorpoEditorial.class.php';

class DaoCorpoEditorial
{

	public function getCorpoEditorialNome($nome)
	{
		try {
			$sql = "SELECT * FROM tb_corpoEditorial WHERE nome=:nome ORDER BY date_field ASC";

			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->bindValue(":nome", $nome);
			$sqlPreparada->execute();

			$nomesBD = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
			$nomes = array();
			foreach ($nomesBD as $nome):
				$corpoEditorial[] = $this->populaCorpoEditorial($nome);
			endforeach;

			return $nomes;
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