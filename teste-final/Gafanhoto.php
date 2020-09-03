<?php

require_once 'Pessoa.php';
class Gafanhoto extends Pessoa
{
    private $login;
    private $totAssistido;

    /**
     * Gafanhoto constructor.
     * @param $login
     */
    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }


    public function viuMaisUm(){
        $this->totAssistido++;
    }

    protected function ganharExp()
    {
        // TODO: Implement ganharEcp() method.
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * @param mixed $totAssistido
     */
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }


}