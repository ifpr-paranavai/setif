<?php
class NormasPublicacao
{

    private $idNormas;
    private $dataLimite;
    private $dataNotificacaoAutor;
    private $dataVersaoFinal;
    private $dataInicioEvento;
    private $dataFinalEvento;
    private $dataMostraTrabalho;
    private $tempoApresentacaoResumo;
    private $tempoApresentacaoArtigo;
    private $ano;

    public function getIdNormas()
    {
        return $this->idNormas;
    }

    public function setIdNormas($idNormas)
    {
        $this->idNormas = $idNormas;
    }
    public function getDataLimite()
    {
        return $this->dataLimite;
    }

    public function setDataLimite($dataLimite)
    {
        $this->dataLimite = $dataLimite;
    }

    public function getDataNotificacaoAutor()
    {
        return $this->dataNotificacaoAutor;
    }

    public function setDataNotificacaoAutor($dataNotificacaoAutor)
    {
        $this->dataNotificacaoAutor = $dataNotificacaoAutor;
    }
    public function getDataVersaoFinal()
    {
        return $this->dataVersaoFinal;
    }

    public function setDataVersaoFinal($dataVersaoFinal)
    {
        $this->dataVersaoFinal = $dataVersaoFinal;
    }
    public function getDataInicioEvento()
    {
        return $this->dataInicioEvento;
    }

    public function setDataInicioEvento($dataInicioEvento)
    {
        $this->dataInicioEvento = $dataInicioEvento;
    }


    public function getDataFinalEvento()
    {
        return $this->dataFinalEvento;
    }

    public function setDataFinalEvento($dataFinalEvento)
    {
        $this->dataFinalEvento = $dataFinalEvento;
    }

    public function getTempoApresentacaoResumo()
    {
        return $this->tempoApresentacaoResumo;
    }

    public function setTempoApresentacaoResumo($tempoApresentacaoResumo)
    {
        $this->tempoApresentacaoResumo = $tempoApresentacaoResumo;
    }

    public function getTempoApresentacaoArtigo()
    {
        return $this->tempoApresentacaoArtigo;
    }

    public function setTempoApresentacaoArtigo($tempoApresentacaoArtigo)
    {
        $this->tempoApresentacaoArtigo = $tempoApresentacaoArtigo;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getDataMostraTrabalho()
    {
        return $this->dataMostraTrabalho;
    }

    public function setDataMostraTrabalho($dataMostraTrabalho)
    {
        $this->dataMostraTrabalho = $dataMostraTrabalho;
    }

}
?>