<?php
	include_once LIB_DAO.DS.'DaoNormasPublicacao.class.php';
    include_once LIB_DAO . DS . 'DaoTopicoInteresse.class.php';
	
  	class NormasPublicacaoController{
	
		public function getTopicosDeInteresse(){
			try {
				$daoTopicoDeInteresse = new DaoTopicoInteresse();
				return $daoTopicoDeInteresse->getTopicosDeInteresse();
			} catch (Exception $e) {
				print "Ocorreu um 
					erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
	
		
		}

	public function getNormasPublicacao($ano)
	{
		try {
			$daoNormasPublicacao = new DaoNormasPublicacao();
			return $daoNormasPublicacao->getNormasPublicacao($ano);
		} catch (Exception $e) {
			print "Ocorreu um 
					erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}	


		}		

?>