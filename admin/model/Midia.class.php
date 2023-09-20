<?php
class Midia
{
    private $idMidia;
    private $link;
    private $titulo;
    private $ano;

    public function getIdMidia()
    {
        return $this->idMidia;
    }

    public function setIdMidia($idMidia)
    {
        $this->idMidia = $idMidia;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
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