<?php 

// Criando a Classe:
class Caneta2 {

    // Criando os Atributos e definindo a Visibilidade:
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // Criando os Atributos utilizando o Método Construtor - Exemplo 01:
    // public function __construct() {     # Ou, de outra forma:
    public function Caneta() {
        $this->cor = "Azul";
        $this->tampar();
    }

     // Criando os Atributos utilizando o Método Construtor - Exemplo 02:
    public function __construct($m, $c, $p) {     # Ou, de outra forma:
    // public function Caneta2($m, $c, $p) {
            $this->modelo = $m;  # Ou, de outra forma:
            // $this->setModelo($m); 
            $this->cor = $c;  # Ou, de outra forma:
            // $this->setCor($c); 
            $this->ponta = $p;  # Ou, de outra forma:
            // $this->setPonta($p); 
            $this->tampar();
        }
    
    // Criando o Método tampar():
    public function tampar() {
        $this->tampada = true;
    }

    // Criando os Métodos Getter, Setter e definindo a Visibilidade:
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
 
}

?>