<?php


class Conta
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC"){
            $this->setSaldo(50);
        } else if($tipo == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>A conta ainda tem dinheiro. Não podemos fechá-la.</p>";
        } else if($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Não podemos encerrá-la.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
        }
    }

    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Impossível depositar. Conta fechada.</p>";
        }
    }

    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de {$this->getDono()}.</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Não pode sacar de uma conta fechada.</p>";
        }
    }

    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        } else if ($this-> getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}.</p>";
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }

    /**
     * @return mixed
     */
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * @param mixed $numConta
     */
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * @param mixed $dono
     */
    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }



}