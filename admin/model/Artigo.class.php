<?php
class Artigo
{
    public const TIPO_RESUMO = 'Resumo';
    public const TIPO_ARTIGO = 'Artigo';

    private $idArtigo;
    private $titulo;
    private $link;
    private $autores;
    private $ano;
    private $tipo;


    public function getIdArtigo()
    {
        return $this->idArtigo;
    }

    public function setIdArtigo($idArtigo)
    {
        $this->idArtigo = $idArtigo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
    public function getAutores()
    {
        return $this->autores;
    }

    public function setAutores($autores)
    {
        $this->autores = $autores;
    }
    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }


    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

}
?>