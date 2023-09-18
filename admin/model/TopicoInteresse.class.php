<?php
class TopicoInteresse
{

    private $idTopicoInteresse;
    private $nome;
    private $linkImagem;

    public function getidTopicoInteresse()
    {
        return $this->idTopicoInteresse;
    }

    public function setIdTopicoInteresse($idTopicoInteresse)
    {
        $this->idTopicoInteresse = $idTopicoInteresse;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getLinkImagem()
    {
        return $this->linkImagem;
    }

    public function setLinkImagem($linkImagem)
    {
        $this->linkImagem = $linkImagem;
    }
}
?>