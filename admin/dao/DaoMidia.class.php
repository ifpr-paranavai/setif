<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'Midia.class.php';

class DaoArtigo
{

	public function getMidiaPorAno($ano)
	{
		try {
			$sql = "SELECT * FROM tb_midia WHERE ano=:ano ORDER BY date_field ASC";

			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->bindValue(":ano", $ano);
			$sqlPreparada->execute();

			$midiasBD = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
			$midias = array();
			foreach ($midiasBD as $midia):
				$midias[] = $this->populaMidia($midia);
			endforeach;

			return $midias;
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	private function populaMidia($row)
	{
		$midia = new Midia();

		$midia->setIdMidia($row['id_midia']);
		$midia->setLink($row['link']);
		$midia->setTitulo($row['titulo']);
		$midia->setAno($row['ano']);
	
		return $midia;
	}
}
?>