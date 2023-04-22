<?php 

// Carregando a Classe Lutador:
require_once "08_Lutador.php";

// Criando a Classe Luta:
class Luta {
    // Atributos:
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Sobrescrevendo os Métodos Abstratos e Criando as Funções:
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() == $l2->getCategoria() and ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: // Empate
                    echo "<p>The fight ended in a draw!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Vitória do Desafiado
                    echo "<p>And the winner was {$this->desafiado->getNome()}</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // Vitória do Desafiante
                    echo "<p>And the winner was {$this->desafiante->getNome()}</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>A Luta não poderá acontecer!</p>";
        }
    }


    // Métodos Especiais: Getter, Setter e Construct
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;

    }
}
?>