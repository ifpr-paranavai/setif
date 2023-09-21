<?php
	include_once LIB_DAO.DS.'DaoCorpoEditorial.class.php';
	
  	class CorpoEditorialController{
		
		public function getCorpoEditorialPorAno($ano){
			try {
				$daoCorpoEditorial = new DaoCorpoEditorial();
				return $daoCorpoEditorial->getCorpoEditorialPorAno($ano);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
	
?>