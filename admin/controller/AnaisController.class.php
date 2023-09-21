<?php
	include_once LIB_DAO.DS.'DaoArtigo.class.php';
	
  	class AnaisController{
		public function getAnosDasEdicoesAnteriores(){
			try {
				$daoArtigo = new DaoArtigo();
				return $daoArtigo->getAnosDasEdicoesAnteriores();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
		
		public function getArtigosPorAno($ano){
			try {
				$daoArtigo = new DaoArtigo();
				return $daoArtigo->getArtigosPorAno($ano);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>