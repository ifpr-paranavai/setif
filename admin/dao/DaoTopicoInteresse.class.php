<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'TopicoInteresse.class.php';

class DaoTopicoInteresse
{
	public function getTopicosDeInteresse()
	{
		try {
			$sql = "SELECT * FROM tb_topico_de_interesse";
			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->execute();
			$topicosDeInteresseBD = $sqlPreparada->fetchAll(PDO::FETCH_ASSOC);
			$topicosDeInteresses = array();
			foreach ($topicosDeInteresseBD as $topicoDeInteresse) :
				$topicosDeInteresses[] = $this->populaTopicoInteresse($topicoDeInteresse);
			endforeach;

			return $topicosDeInteresses;
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	private function populaTopicoInteresse($row)
	{
		$topicoDeInteresse = new TopicoInteresse();

		$topicoDeInteresse->setIdTopicoInteresse($row['id_topico_de_interesse']);
		$topicoDeInteresse->setNome($row['nome']);
		$topicoDeInteresse->setLinkImagem($row['link_imagem']);
		return $topicoDeInteresse;
	}
}
