<?php
class CorpoEditorial
{
    public const FUNCAO_PRESIDENTE = 'Presidente';
    public const FUNCAO_SERVIDOR = 'Organizador Servidor';
    public const FUNCAO_DISCENTE = 'Organizador Discente';

    private $idCorpoEditorial;
    private $nome;
    private $funcao;
    private $ano;
  


    public function getIdCorpoEditorial()
    {
        return $this->idCorpoEditorial;
    }

    public function setIdCorpoEditorial($idCorpoEditorial)
    {
        $this->idCorpoEditorial = $idCorpoEditorial;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }
    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }
}
?>