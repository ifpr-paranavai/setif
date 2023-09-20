<?php
	include_once LIB_DAO.DS.'DaoMidia.class.php';
	
  	class MidiaController{
<<<<<<< HEAD
		public function getMidia(){
=======

		public function getAnosMidia(){
>>>>>>> a88e2b9b0a3a697a46efd2dd85cffef044189a41
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