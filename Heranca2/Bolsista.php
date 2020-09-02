<?php

require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa(){
        echo "<p>Renovando bolsa...";
    }

    // sobrescrito
    public function pagarMens(){
        echo "<p>$this->nome é bolsista. Logo, paga com desconto.";
    }

    /**
     * @return mixed
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * @param mixed $bolsa
     */
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }


}