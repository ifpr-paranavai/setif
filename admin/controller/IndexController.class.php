<?php
	include_once LIB_DAO.DS.'DaoInstitucional.class.php';
	
  	class IndexController {
		public function getDadosPaginaInstitucional($ano){
			try {
				$daoInstitucional = new DaoInstitucional();
				return $daoInstitucional->getDadosPaginaInstitucional($ano);
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}	
		}
	}
?>