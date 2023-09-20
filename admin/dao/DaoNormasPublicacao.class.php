<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'NormasPublicacao.class.php';

class DaoNormasPublicacao
{
	public function getNormasPublicacao($ano)
	{
		try {
			$sql = "SELECT * FROM tb_normas_publicacao WHERE ano=:ano LIMIT 1";
			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->bindValue(":ano", $ano);
			$resultado = $sqlPreparada->execute();
			return $this->populaNormasPublicacao($sqlPreparada->fetch(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	private function populaNormasPublicacao($row)
	{
		$normasPublicacao = new NormasPublicacao();

		$normasPublicacao->setIdNormas($row['id_normas_publicacao']);
		$normasPublicacao->setDataLimite($row['data_limite']);
		$normasPublicacao->setDataNotificacaoAutor($row['data_notificacao_autor']);
		$normasPublicacao->setDataVersaoFinal($row['data_versao_final']);
		$normasPublicacao->setDataInicioEvento($row['data_inicio_evento']);
		$normasPublicacao->setDataFinalEvento($row['data_final_evento']);
		$normasPublicacao->setDataMostraTrabalho($row['data_mostra_trabalho']);
		$normasPublicacao->setTempoApresentacaoResumo($row['tempo_apresentacao_resumo']);
		$normasPublicacao->setTempoApresentacaoArtigo($row['tempo_apresentacao_artigo']);
		$normasPublicacao->setAno($row['ano']);
		return $normasPublicacao;
	}
}
