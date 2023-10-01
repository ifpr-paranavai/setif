<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'Artigo.class.php';

class DaoArtigo
{
	public function getAnosDasEdicoesAnteriores()
	{
		try {
			$sql = "SELECT ano FROM tb_artigo GROUP BY ano ORDER BY ano DESC";
			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->execute();
			return $sqlPreparada->fetchAll(PDO::FETCH_COLUMN);
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	public function getArtigosPorAno($ano)
	{
		try {
			$sql = "SELECT * FROM tb_artigo WHERE ano=:ano ORDER BY titulo ASC";

			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->bindValue(":ano", $ano);
			$sqlPreparada->execute();

			$artigosBD = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
			$artigos = array();
			foreach ($artigosBD as $artigo):
				$artigos[] = $this->populaArtigo($artigo);
			endforeach;

			return $artigos;
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	private function populaArtigo($row)
	{
		$artigo = new Artigo();

		$artigo->setIdArtigo($row['id_artigo']);
		$artigo->setTitulo($row['titulo']);
		$artigo->setLink($row['link']);
		$artigo->setAutores($row['autores']);
		$artigo->setAno($row['ano']);
		$artigo->setTipo($row['tipo']);
		return $artigo;
	}
}
?>