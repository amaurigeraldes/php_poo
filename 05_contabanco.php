<?php 

// 1) Criando a Classe
class ContaBanco {

    // 2) Criando os Atributos e definindo a Visibilidade:
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

 

    // 3) CRIANDO MÉTODOS ESPECIAIS:

    // 3.1) Criando o Método Construct:

    function __construct() {
        // $this->saldo = 0;  # Ou, de outra forma:
        $this->setSaldo(0);
        // $this->status = false;  # Ou, de outra forma:
        $this->setStatus(false);
    }

    // 3.2) Criando os Métodos Getter e Setter:

    # Get the value of numConta
    public function getNumConta() {
        return $this->numConta;
    }
    # Set the value of numConta
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }
   
    # Get the value of tipo
    public function getTipo() {
        return $this->tipo;
    }
    # Set the value of tipo
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    # Get the value of dono
    public function getDono() {
        return $this->dono;
    }
    # Set the value of dono
    public function setDono($dono) {
        $this->dono = $dono;
    }

    # Get the value of saldo
    public function getSaldo() {
        return $this->saldo;
    }
    # Set the value of saldo
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
   
    # Get the value of status
    public function getStatus() {
        return $this->status;
    }
    # Set the value of status
    public function setStatus($status) {
        $this->status = $status;
    }



    // 4) CRIANDO OS MÉTODOS:

    public function abrirConta($t) {
        // $this->tipo = $t; # Ou, de outra forma: 
        $this->setTipo($t);
        // $this->status = true;  # Ou, de outra forma: 
        $this->setStatus(true);
        if ($t == "CC") {
            // $this->saldo = 50;  # Ou, de outra forma: 
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            // $this->saldo = 150;   # Ou, de outra forma: 
            $this->setSaldo(150);
        }
        echo "<p>A Conta de {$this->getDono()} foi criada com sucesso!</p>";
    }
    

    public function depositar($v) {
        // if ($this->status == true);    # Ou, de outra forma: 
        if ($this->getStatus()) {
            // $this->saldo = $this->saldo + $v;   # Ou, de outra forma: 
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v realizado na conta de {$this->getDono()}.</p>";
        } else {
            echo "<p>A conta está fechada. Não consigo depositar!</p>";
        }
    }


    public function sacar($v) {
        // if ($this->status == true);    # Ou, de outra forma: 
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                // $this->saldo = $this->saldo - $v;   # Ou, de outra forma: 
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v efetuado pelo cliente {$this->getDono()}.</p>";
            } else {
                echo "<p>{$this->getDono()}, o seu saldo é insuficiente para saque do valor de R$ $v!</p>";
            }
        } else {
            echo "<p>Impossível sacar. A conta está fechada!</p>";
        }
    }


    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>A Mensalidade de R$ $v foi debitada na Conta de {$this->getDono()}!</p>";
            } else {
                echo "<p>Saldo Insuficiente para debitar a mensalidade!</p>";
            }
        }
    }
    


    public function fecharConta() {
        // if ($this->saldo > 0) {    # Ou, de outra forma: 
        if ($this->getSaldo() > 0) {
            echo "<p>A conta de {$this->getDono()} ainda tem dinheiro, não posso fechá-la!</p>";
        // } elseif ($this->saldo < 0) {    # Ou, de outra forma: 
        } elseif ($this->getSaldo() < 0) {
            echo "<p>A conta de {$this->getDono()} está com o Saldo Devedor. Impossível encerrar!</p>";
        } else {
            // $this->status = false;   # Ou, de outra forma: 
            $this->setStatus(false);
            echo "<p>A Conta de {$this->getDono()} foi fechada com sucesso!</p>";
        }
    }



}
?>