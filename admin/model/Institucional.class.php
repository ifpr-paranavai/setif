<?php
class Instituicao
{

    private $idInstitucional;
    private $textoSobre;
    private $programacao;
    private $localizacao;
    private $email;
    private $telefone;
    private $dataAtualizacao;
    private $ano;

    public function getIdInstitucional()
    {
        return $this->idInstitucional;
    }

    public function setIdInstitucional($idInstitucional)
    {
        $this->idInstitucional = $idInstitucional;
    }
    public function getTextoSobre()
    {
        return $this->textoSobre;
    }

    public function setTextoSobre($textoSobre)
    {
        $this->textoSobre = $textoSobre;
    }

    public function getProgramacao()
    {
        return $this->programacao;
    }

    public function setProgramacao($programacao)
    {
        $this->programacao = $programacao;
    }
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getDataAtualizacao()
    {
        $timestamp = strtotime($this->dataAtualizacao);
        return date('d/m/Y', $timestamp);
    }

    public function setDataAtualizacao($dataAtualizacao)
    {
        $this->dataAtualizacao = $dataAtualizacao;
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