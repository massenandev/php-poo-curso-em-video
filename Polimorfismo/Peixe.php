<?php

require_once 'Animal.php';
class Peixe extends Animal
{
    private $corEscama;

    public function locomover()
    {
        echo "<p>Nadando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom()
    {
        echo "<p>Peixe não faz som</p>";
    }

    public function soltarBolha(){
        echo "<p>Soltando bolha</p>";
    }

    /**
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * @param mixed $corEscama
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }


}