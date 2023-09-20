<?php
	include_once LIB_DAO.DS.'DaoMidia.class.php';
	
  	class MidiaController{
		public function getMidia(){
			try {
				$daoMidia = new DaoMidia();
				return $daoMidia->getMidia();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}

		public function getMidiaPorAno($ano){
			try {
				$daoMidia = new DaoMidia();
				return $daoMidia->getMidiaPorAno($ano);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>