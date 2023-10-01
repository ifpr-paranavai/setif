<?php
	include_once LIB_DAO.DS.'DaoMidia.class.php';
	
  	class MidiaController{

		public function getMidia(){

		}
		public function getAnosMidia(){
			try {
				$daoMidia = new DaoMidia();
				return $daoMidia->getAnosMidia();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}

		public function getFotosPorAno($ano){
			try {
				$daoMidia = new DaoMidia();
				return $daoMidia->getFotosPorAno($ano);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}

		public function getFotos(){
			try {
				$daoMidia = new DaoMidia();
				return $daoMidia->getFotos();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>