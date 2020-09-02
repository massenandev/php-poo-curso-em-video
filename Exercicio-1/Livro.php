<?php


class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){

    }

    public function abrir()
    {
        $this->setAberto(true);
    }

    public function fechar()
    {
        $this->setAberto(false);
    }

    public function folhear()
    {
        if($this->aberto == true){
            echo "Folheando...";
        } else {
            echo "Impossível folhear. Livro fechado.";
        }
    }

    public function avancarPag()
    {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltarPag()
    {
        $this->setPagAtual($this->getPagAtual() - 1);
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
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * @param mixed $totPaginas
     */
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    /**
     * @return mixed
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @param mixed $pagAtual
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    /**
     * @return mixed
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * @param mixed $aberto
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @param mixed $leitor
     */
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }



}