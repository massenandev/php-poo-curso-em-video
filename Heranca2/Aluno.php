<?php

require_once 'Pessoa.php';
class Aluno extends Pessoa
{
    # Herança completa (superclasse + específicos) OU Herança para diferença
    private $matricula;
    private $curso;

    // Se tiver "final" aqui, não poderá ser reescrito
    // Já, se for na classe, "final class", a classe não pode ser instanciada
    public function pagarMens(){
        echo "Pagando mensalidade do aluno " . $this->getNome() . ".";
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }


}