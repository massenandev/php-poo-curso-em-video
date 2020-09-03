<?php

require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    /**
     * Video constructor.
     * @param $titulo
     */
    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function play()
    {
        $this->reproduzindo = true;
    }

    public function pause()
    {
        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->curtidas++;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * @param mixed $avaliacao
     */
    public function setAvaliacao($avaliacao)
    {
          $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }

    /**
     * @return mixed
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param mixed $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * @return mixed
     */
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * @param mixed $curtidas
     */
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }

    /**
     * @return mixed
     */
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * @param mixed $reproduzindo
     */
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }



}