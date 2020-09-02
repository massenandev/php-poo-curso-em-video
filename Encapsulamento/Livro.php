<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    /**
     * Livro constructor.
     * @param $titulo
     * @param $autor
     * @param $totPaginas
     * @param $leitor
     */
    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "<hr>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo ". Páginas: " . $this->getTotPaginas() . ". Página atual: " . $this->getPagAtual() . ". Leitor: " . $this->getLeitor()->getNome();
    }

    public function abrir()
    {
        $this->setAberto(true);
    }

    public function fechar()
    {
        $this->setAberto(false);
    }

    public function folhear($p)
    {
        if($this->aberto == true){
            if ($p > $this->totPaginas){
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        } else {
            echo "Impossível folhear. Livro fechado.";
        }
    }

    public function avancarPag()
    {
        if($this->pagAtual >= $this->totPaginas){
            echo "Fim do livro.";
        } else if($this->pagAtual < $this->totPaginas){
            $this->pagAtual++;
        } else {
            echo "Não pode avançar mais. Fim do livro.";
        }
    }

    public function voltarPag()
    {
        if($this->pagAtual <= $this->totPaginas){
            $this->pagAtual--;
        } else if($this->pagAtual > $this->totPaginas){
            echo "Não pode voltar mais. Fim do livro.";
        }
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