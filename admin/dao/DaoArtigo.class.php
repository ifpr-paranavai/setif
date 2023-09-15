<?php
include_once LIB_INCLUDES . DS . 'Conexao.class.php';
include_once LIB_MODEL . DS . 'Artigo.class.php';

class DaoArtigo
{
 	public function getAnosDasEdicoesAnteriores(){
		try {
			$sql = "SELECT ano FROM tb_artigo GROUP BY ano";
			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			 $sqlPreparada->execute();
			return $sqlPreparada->fetchAll(PDO::FETCH_COLUMN);
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	/*public function getDadosPaginaInstitucional($ano) 
	{
		try {
			$sql = "SELECT * FROM tb_institucional WHERE ano=:ano ORDER BY data_atualizacao DESC LIMIT 1";
			$sqlPreparada = Conexao::getInstancia()->prepare($sql);
			$sqlPreparada->bindValue(":ano", $ano);
			$resultado = $sqlPreparada->execute();
			return $this->populaInstitucional($sqlPreparada->fetch(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}
	private function populaInstitucional($row)
	{
		$institucional = new Institucional();

		$institucional->setIdInstitucional($row['id_institucional']);
		$institucional->setTextoSobre($row['texto_sobre']);
		$institucional->setProgramacao($row['programacao']);
		$institucional->setLocalizacao($row['localizacao']);
		$institucional->setEmail($row['email']);
		$institucional->setTelefone($row['telefone']);
		$institucional->setDataAtualizacao($row['data_atualizacao']);
		$institucional->setAno($row['ano']);
		return $institucional;
	} */
}
?>