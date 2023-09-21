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

		public function getMidiaPorAno($ano){
			try {
				$daoMidia = new DaoMidia();
				return $daoMidia->getMidiaPorLink($ano);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>