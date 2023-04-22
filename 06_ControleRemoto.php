<?php 

// A Classe ControleRemoto implementa Controlador:
# 1) Inserir os parâmetros abaixo:
# require_once '06_Controlador.php';
# class ControleRemoto implements Controlador {

# 2) Sobrescrever os Métodos abstratos (ver a partir da Linha 48):

require_once '06_Controlador.php';
class ControleRemoto implements Controlador {
    // Atributos:
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos Especiais: Getter, Setter e Construct
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

 
    private function getVolume() {
        return $this->volume;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }

    
    private function getLigado() {
        return $this->ligado;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    
    private function getTocando() {
        return $this->tocando;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }




    // Sobrescrevendo os Métodos Abstratos e Criando as Funções:

    public function ligar() {
        $this->setLigado(true);
    }


    public function desligar() {
        $this->setLigado(false);
    }
    

    public function abrirMenu() {
        echo "<p>====== MENU ======</p>";
        echo "<p>Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO") . "</p>";
        echo "<p>Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO") . "</p>";
        echo "Volume: {$this->getVolume()}  ";
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
    }


    public function fecharMenu() {
        echo "<p>Fechando Menu...</p>";
    }


    public function maisVolume() {
        if ($this->getLigado() == true) { # Ou, simplesmente ($this->getLigado())
            $this->setVolume($this->getVolume() + 10);
        }
    }


    public function menosVolume() {
        if ($this->getLigado() == true) { # Ou, simplesmente ($this->getLigado())
            $this->setVolume($this->getVolume() - 10);
        }
    }


    public function ligarMudo() {
        if ($this->getLigado() and $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }


    public function desligarMudo() {
        if ($this->getLigado() and $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }


    public function play() {
        if ($this->getLigado() and !($this->getTocando())) {
            $this->setTocando(true);
        }
    }


    public function pause() {
        if ($this->getLigado() and ($this->getTocando())) {
            $this->setTocando(false);
        }
    }
}



?>