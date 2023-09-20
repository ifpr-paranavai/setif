<?php
	include_once LIB_DAO.DS.'DaoCorpoEditorial.class.php';
	
  	class CorpoEditorialController{
		
		public function getCorpoEditorialNome($nome){
			try {
				$daoCorpoEditorial = new DaoCorpoEditorial();
				return $daoCorpoEditorial->getCorpoEditorialNome($nome);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>