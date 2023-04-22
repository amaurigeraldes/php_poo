<?php 

// Criando a Classe:
class Caneta {
    # Definindo a Visibilidade
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // Criando os Métodos:
    # Definindo a Visibilidade
    public function rabiscar() {
        // $this é o Objeto que chamou
        if ($this->tampada) {
            echo "Não posso rabiscar, pois a Caneta está tampada... <br>";
        } else {
            echo "Estou rabiscando... <br>";
        }
    }

    # Definindo a Visibilidade
    // private function tampar() { # Alterando de Private para Public
    public function tampar() {
        $this->tampada = true;
    }

    # Definindo a Visibilidade
    // private function destampar() { # Alterando de Private para Public
    public function destampar() {
        $this->tampada = false;
    }


}

?>