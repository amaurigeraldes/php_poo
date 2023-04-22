<?php 

// Criando a Classe:
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // Criando os Métodos:
    function rabiscar() {
        // $this é o Objeto que chamou
        if ($this->tampada) {
            echo "Não posso rabiscar, pois a Caneta está tampada... <br>";
        } else {
            echo "Estou rabiscando... <br>";
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }


}

?>